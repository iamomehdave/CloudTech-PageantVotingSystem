@extends('layouts.app')
@section('title', 'Contestants')
@section('content')
<!--================Home Banner Area =================-->
<section class="home_banner_area">
    <div class="banner_inner">
        <center>
            <p class="btn btn-primary"> List Of Contestants </p>
            <center>
                <div class="container">
                    <div class="row">
                        @foreach ($contestants as $value)

                        <div class="col-lg-3 col-md-4 col-sm-6 col-xs-6 wow fadeIn" data-wow-delay="0.5s">
                            <div class="member">
                                <img style="height: 270px; width: 270px;" src="{{asset('image/'.$value->image)}}" class="img-thumbnail">
                                <h2></h2>
                                <center>
                                <font color="red">{{$value->votes}}<em> Votes</em> </font> <a class="btn btn-info" href="/contestant/{{$value->slug}}" role="button">Vote Me</a> 
                                </center>
                                </h2> <br>
                            </div>
                        </div>
                        @endforeach
                    </div>
            </div>
    </div>
    </div>
</section>
@endsection