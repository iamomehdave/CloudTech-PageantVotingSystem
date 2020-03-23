@extends('layouts.inner')

@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">

  @if($message = Session::get('success'))
  <div class="alert alert-success">
    <p>{{ $message }}</p>
  </div>
  @endif

  <!-- Page Heading -->
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
  </div>


  <div class="table-responsive-md">
    <table class="table">
      <thead>
        <tr>
          <th scope="col">cont.No</th>
          <th scope="col">Photo</th>
          <th scope="col">Name</th>
          <th scope="col">Actions</th>
        </tr>
      </thead>
      @foreach ($contestants as $value)
      <tbody>
        <tr>
          <td>{{$value->sn}}</td>
          <td><img src="{{asset('image/'.$value->image)}}" width="100" height="80" class="thumbnail" alt="..."></td>
          <td>{{$value->name}}</td>
          <td><a class="btn btn-primary" href="admin/{{$value->slug}}" role="button">View</a></td>
          <td><a class="btn btn-primary" href="/admin/{{$value->slug}}/edit" role="button">Edit</a></td>
          <td>
            <form action="/admin/{{$value->slug}}" method="POST">
              @method('DELETE')
              @csrf
              <button type="submit" class="btn-primary">Delete</button>
            </form>
          </td>
        </tr>
      </tbody>
      @endforeach
    </table>
    <div class="row justify-content-center">
      <h5> {!! $contestants->links() !!} </h5>
    </div>
  </div>


    <!-- Content Row -->

  </div>
  <!-- /.container-fluid -->
  @endsection