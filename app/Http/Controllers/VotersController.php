<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Voter;
use App\Contestant;


class VotersController extends Controller
{
    public function verify(Request $request, $reference) 
    {
  
          $result = array();
          


          // return response()->json($reference);
          // dd($result);

         /*  $out = new \Symfony\Component\Console\Output\ConsoleOutput();
          $out->writeln($reference);
          console.log($reference);
          dd("hello"); */
          
  
          //The parameter after verify/ is the transaction reference to be verified
          $url = 'https://api.paystack.co/transaction/verify/'. $reference;
         
  
          $ch = curl_init();
          curl_setopt($ch, CURLOPT_URL, $url);
          curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
          curl_setopt(
          $ch, CURLOPT_HTTPHEADER, [
              'Authorization: Bearer '. env('PAYSTACK_SECRET_KEY')] 
          );
          $request = curl_exec($ch);
          if(curl_error($ch)){
          echo 'error:' . curl_error($ch);
          }
          curl_close($ch);
  
         
          if ($request) {
          $result = json_decode($request, true);
          }

          if (array_key_exists('data', $result) && array_key_exists('status', $result['data']) && ($result['data']['status'] === 'success')) {
            
            response()->json($result['data']);
            
            $metadata =   $result['data']['metadata'];
           
            $name = $metadata['name'];
            $email =  $metadata['email'];
            $phone =  $metadata['phone'];
            $contestant = $metadata['contestant'];
            $votes =   $metadata['votes'];

            DB:: table('voters')->insert(
                 ['name' => $name, 'email'=> $email, 'phone'=> $phone, 'contestant' => $contestant, 'votes'=> $votes ]
            );



            DB::table('contestants')
                ->where('name', $contestant)
                ->update(['votes' =>DB::raw("votes +{$votes}")]);


            // $voter = new Voter();
           /*  $voter->name= $metadata['name'];
            $voter->phone= $metadata['phone'];
            $voter->amount=  $result['data']['amount'];
            $voter->contestant = $metadata['contestant'];
            $voter->votes = $metadata['votes'];
            $voter->email = $data['customer']['email']; */
           // $out = new \Symfony\Component\Console\Output\ConsoleOutput();
            //$out->writeln($voter->email);

            //$voter->save();
           // return response()->json($voter);
            

            

            


        // DB:: table('voters')->insert(
        //    ['name' => $name, 'email'=> $email, 'phone'=> $phone, 'contestant' => $contestant, 'votes'=> $votes ]
        //     );
             return response()->json($result['data']);
           
        }else{
            return response()->json([
                'message' => 'Transaction was unsuccessful',
                'success' => false
            ], 401);
            $out->writeln(response);
            dd($request);
        }

    }

    public function contestants()
    {
        $contestants = Contestant::all();
        return view('contestants', compact('contestants'));
        // return view('feature');
    }

    public function vote(Contestant $value)
    {
        return view('vote', compact('value'));
    }
}
