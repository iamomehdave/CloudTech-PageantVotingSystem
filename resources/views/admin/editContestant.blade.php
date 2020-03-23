@extends('layouts.inner')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
               <div class="card-header"><h3> <center>Add Contestant to Batch A</center> </h3></div>
                <div class="card-body">
                    <form method="POST" action="/admin/{{$value->slug}}" enctype="multipart/form-data">
                        @method('PATCH')
                    	@include('admin/form')
                    <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-success">
                                    {{ __('Submit') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
