@extends('layouts/frontend-layout')
@section('title', 'Editing details for'. $customer->name)
@section('content')

<h1>Editing details for {{$customer->name}} </h1>
<hr>
<?php //foreach ($customers as $customersList) {
	//echo '<li>'.$customersList.'</li>';
//} ?>

<form action="/customers/{{$customer->id}}" method="POST" >
	@method('PATCH')
	@include('customers/form')
<button type="submit">Save Customer</button>
</form>
@endsection