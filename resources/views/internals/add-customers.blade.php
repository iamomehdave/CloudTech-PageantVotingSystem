@extends('layouts/frontend-layout')
<hr>
@section('title','Add Customers')

@section('content')
<h4>Add a New Customer Form</h4>

<form action="customer" method="POST" >
Customer Name <br>
<input type="text" name="name" value="{{old('name')}}"> <br>
{{$errors->first('name')}}
<p>
Email <br>
<input type="text" name="email" value="{{old('email')}}">
<br>
{{$errors->first('email')}}
<p>
<select name="active" id="active">
	<option value="" disabled>Select Customer Status</option>
	<option value="1">Active</option>
	<option value="0">Inactive</option>
</select>
<p>
<select name="company_id" id="company_id">
	@foreach ($companies as $company)
	<option value="{{ $company->id }}"> {{ $company->name }}</option>
@endforeach
</select>
<button type="submit">Submit</button>
@csrf
</form>

@extends('layouts/frontend-layout')
@section('title', 'Customers List')
@section('content')
<h1>Customers </h1>
<h3><a href="customers/create">Add a new Customer</a></h3>
<hr>
<?php //foreach ($customers as $customersList) {
	//echo '<li>'.$customersList.'</li>';
//} ?>



<h3>ACTIVE CUSTOMERS</h3>
<ul>
	<table>
	<thead>
		<td>id</td>
		<td>name</td>
		<td>Email</td>
		<td>Status</td>
	</thead>

	@foreach ($activeCustomers as $activeCustomers)
	<tbody>
	<td> {{$activeCustomers->id}}</td>
	<td> {{$activeCustomers->name}} </td>
	<!-- <td>{{$activeCustomers->company->name}}</td> -->
	<td> {{$activeCustomers->active}}</td>
	</tbody>
	@endforeach

	</table>
</ul>

<h3>INACTIVE CUSTOMERS</h3>
<ul>
	<table>
	<thead>
		<td>id</td>
		<td>name</td>
		<td>Email</td>
		<td>Status</td>
	</thead>

	@foreach ($inactiveCustomers as $inactiveCustomers)
	<tbody>
	<td> {{$inactiveCustomers->id}}</td>
	<td> {{$inactiveCustomers->name}} </td>
	<!-- <td>{{ $inactiveCustomers->company->name}}</td> -->
	<td> {{$inactiveCustomers->active}}</td>
	</tbody>
	@endforeach

	</table>
</ul>

@foreach($companies as $company)
	<h3>{{$company->name}} </h3>

	@foreach($company->customers as $customer)
	<p>{{$customer->name}}</p>
	@endforeach
@endforeach

@endsection



{{$customer->active == 'active' ? 'selected', ''}}