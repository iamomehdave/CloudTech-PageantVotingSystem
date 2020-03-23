@extends('layouts/frontend-layout')
@section('title', 'Customers List')
@section('content')
<h1>Customers </h1>
<h3><a href="customers/create">Add a new Customer</a></h3>
<hr>

<table>
	
@foreach ($customers as $customer)
<tr>
{{$customer->id}}
 <a href="/customers/{{$customer->id}}">{{$customer->name}}</a>
{{$customer->company->name}}
{{$customer->active}} <br>

@endforeach
	





@endsection