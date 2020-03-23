Customer Name <br>
<input type="text" name="name" value="{{old('name') ?? $customer->name}}"> <br>
{{$errors->first('name')}}
<p>
Email <br>
<input type="text" name="email" value="{{old('email') ?? $customer->email}}">
<br>
{{$errors->first('email')}}
<p>
<select name="active" id="active">
	<option value="" disabled>Select Customer Status</option>
	@foreach ($customer->activeOptions() as $activeOptionKey=> $activeOptionValue)
	<option value="{{$activeOptionKey}}" {{$customer->active == $activeOptionValue ? 'selected': ''}}>{{$activeOptionValue}}</option>
	@endforeach
	
	
</select>
<p>
<select name="company_id" id="company_id">
	@foreach ($companies as $company)
	<option value="{{ $company->id }}" {{ $company->id == $customer->company_id ? 'selected' : ''}}> {{ $company->name}}</option>
@endforeach
</select>
<p>
@csrf