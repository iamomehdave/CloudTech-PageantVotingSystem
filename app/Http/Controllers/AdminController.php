<?php

namespace App\Http\Controllers;

use App\Contestant;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Image;

class AdminController extends Controller
{
	public function __construct()
	{
		$this->middleware('auth');
	}

public function index(){

	$contestants = Contestant::latest()->paginate(5);
	//$contestants = Contestant::all();
	return view('admin/index', compact('contestants'))
	->with('i', (request()->input('page', 1) - 1) * 5);
}

 public function create(){
 	$value = new  Contestant();
 	return view('admin/addNewContestant', compact('value'));

 }
 
 public function store(){
	 $contestants = Contestant:: create($this->validateRequest());
    $this->storeImage($contestants);
 	return redirect('admin')->with('success', 'Contestant added Succefully');
 }

 public function show(Contestant $value){
	 return view('admin/displayContestants', compact('value'));
	
 }

 public function edit(Contestant $value){
	$contestants = Contestant::all();
	return view('admin/editContestant', compact('value', 'contestants'));

}
 public function update(Contestant $value){
  	$value->update($this->validateRequest());
  	
  	$this->storeImage($value);
	return redirect('admin/'.$value->slug)->with('success', 'Updated Succefully');
		//return back()->with('success', 'Updated Succefully');
}
public function destroy(Contestant $value){
	$value->delete();
	return redirect('admin');
}

 private function validateRequest(){
 	return tap(request()->validate([
 		'name' => 'required',
 		'email' => 'required|email',
 		'phone' => 'required',
		'sn'    => 'required',
//you can validate here if you don't want to make the image optional by oncommenting the line below
		//'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:5048'

 		]), function(){
 		if (request()->hasFile('image')){
 			request()->validate([
			//'image'=> 'file|image|max:5000',
			'image' => 'required|file|mimes:jpeg,png,jpg,gif,mp4|max:100048'
 			]);
 		}
 	}
 );
 }

	public function storeImage($contestants)
	{
		$image = (request('image'));

		$imageName =  time().'.'. $image->getClientOriginalExtension();
		$destinationPath = public_path('image');
		
		
		/*$resize_image = Image::make($image->getRealPath());
		$resize_image->resize(700, 700, function($constraint)
		{
			$constraint->aspectRatio();
		})->save($destinationPath. '/'. $imageName);
		$destinationPath = public_path('images');*/

		$image->move($destinationPath,$imageName);

		$contestants->update(['image' => $imageName]);
	//dd($contestants);
	}
 /* public function storeImage($contestants){

 	$image = (request('image'));
 	//$new_image = rand(). '.'. $image->getClientOriginalExtension();
 	//$destination = base_path(). 'public/images';
 	//$path = request('image')->move(('images'), $new_image);
 	//dd($path);
 	//dd($new_image);
 	if(request()->has('image')){
			//get filename with extension
			$filenamewithextension = $image->getClientOriginalName();

			//get filename without extension
			$filename = pathinfo($filenamewithextension, PATHINFO_FILENAME);

			//get file extension
			$extension = $image->getClientOriginalExtension();

			//filename to store
			$filenametostore = $filename . '_' . time() . '.' . $extension;

			//dd($filenametostore);


 		//$new_image = rand(). '.'. $image->getClientOriginalExtension();
		// $path = request('image')->move(('images'), $filenametostore);

			// request('image')->move('images', $filenametostore);
			 request('image')->move('image', $filenametostore);
		//dd($path2);
			//Resize image here
			$thumbnailpath = public_path('image/' . $filenametostore);
			$img = Image::make($thumbnailpath)->resize(500, 250, function ($constraint) {
				$constraint->aspectRatio();
			});
			
			$img->save($thumbnailpath);
			//request->file('profile_image')->storeAs('public/profile_images/thumbnail', $filenametostore);
			//dd($img);
 		$contestants->update(['image' => $filenametostore]);
 		//dd($batchA);

 		

 		
 		//request()->image->store('public'),
 		

 		
 	} */
 }

