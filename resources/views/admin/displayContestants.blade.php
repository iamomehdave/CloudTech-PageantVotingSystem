@extends('layouts.inner')

@section('content')
<div class="container">
    @if($message = Session::get('success'))
    <div class="alert alert-success">
        <p>{{ $message }}</p>
    </div>
    @endif
    <!-- Area Chart -->
    <div class="row">
        <div class="col-xl-8 col-lg-7 col-sm-12">
            <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Contestant Photo</h6>
                    <div class="dropdown no-arrow">


                    </div>
                </div>
                <!-- Card Body -->
                <div class="card-body">
                    <div class="row justify-content-center">
                        <img src="{{asset('image/'.$value->image)}}" class="img-fluid" height="350" width="250" alt="hello" class="thumbnail">
                    </div>

                </div>
            </div>
        </div>

        <!-- Pie Chart -->
        <div class="col-xl-4 col-lg-5 col-sm-12">
            <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Contestant Details</h6>
                    <div class="dropdown no-arrow">


                    </div>
                </div>
                <!-- Card Body -->
                <div class="card-body">

                    <p><strong>Name</strong>: &nbsp; &nbsp; {{$value->name}}</p>
                    <p><strong>Email</strong>: &nbsp; &nbsp; {{$value->email}}</p>
                    <p><strong>Votes</strong>: &nbsp; &nbsp; {{$value->votes}}</p>
                    <p><strong>Date Added</strong>: &nbsp; &nbsp; {{$value->created_at}}</p>

                    <div class="mt-4 text-center small">
                        <span class="mr-2">
                            <i class="fas fa-circle text-primary"></i> Direct
                        </span>
                        <span class="mr-2">
                            <i class="fas fa-circle text-success"></i> Social
                        </span>
                        <span class="mr-2">
                            <i class="fas fa-circle text-info"></i> Referral
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection