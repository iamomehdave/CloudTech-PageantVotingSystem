@extends('layouts/frontend-layout')
@section('title', 'Profile'. $customer->name)
@section('content')
<h1>Details of {{$customer->name}} </h1>
<hr>
<p>
	








	<a href="/customers/{{$customer->id}}/edit">Edit Details</a>
	<form action="/customers/{{$customer->id}}" method="POST">
		@method('DELETE')
		@csrf
	<button type="submit">Delete</button>
	</form>
</p>
<p><strong>Name</strong>{{$customer->name}}</p>
<p><strong>Email</strong>{{$customer->email}}</p>
<p><strong>Company</strong>{{$customer->company->name}}</p>
	





@endsection