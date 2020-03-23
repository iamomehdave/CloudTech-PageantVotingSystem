@extends('layouts/frontend-layout')
@section('title', 'Add new Customer')
@section('content')

<h1>Customers </h1>
<hr>
<?php //foreach ($customers as $customersList) {
	//echo '<li>'.$customersList.'</li>';
//} ?>

<form action="/customer" method="POST" >
@include('customers/form')

<button type="submit">Add Customer</button>
</form>
@endsection