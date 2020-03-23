@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><h2> <center>Voting Form</center> </h2></div>

                <div class="card-body">
                    <form onsubmit="payWithPaystack()">
                     
                        <script src="https://js.paystack.co/v1/inline.js"></script>
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Full Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" id="name" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" id="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="phone" class="col-md-4 col-form-label text-md-right">{{ __('Phone Number') }}</label>

                            <div class="col-md-6">
                                <input id="phone" type="tel" id="phone" class="form-control @error('name') is-invalid @enderror" name="phone" value="{{ old('phone') }}" required autocomplete="phone">

                                @error('phone')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="contestant" class="col-md-4 col-form-label text-md-right">{{ __('Contestant Name') }}</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control @error('contestant') is-invalid @enderror" name="contestant"  id="contestant" required autocomplete="contestant" value = "{{$value->name}}" readonly>

                                @error('contestant')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <?php
                        $d1 = 1;
                        $d2 = 2;
                         ?>

         	<div class="form-group row">
               <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Numbers of Vote') }}</label>
            	<div class="col-md-6">
    			 <select class="form-control" name="votes" id="number_of_votes" onchange="myFunction()">
    			 		<option>Select Numbers of Vote</option>
			     		<option value="{{$d1}}">1 Vote</option>
			     		<option value={{$d2}}>2 Vote </option>
			     		<option value="3">3 Vote</option>
			     		<option value="4">4 Vote</option>
			     		<option value="5">5 Vote</option>
              <option value="10">10 Vote</option>
              <option value="15">15 Vote </option>
              <option value="20">20 Vote</option>
              <option value="50">50 Vote</option>
              <option value="100">100 Vote</option>
    				</select>
  				</div>
            </div>

 			<div class="form-group row">
              <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Amount') }}</label>
               	<div class="col-md-6">
     				<div class="input-group mb-2 mr-sm-2">
    					<div class="input-group-prepend">
      						<div class="input-group-text">₦</div>
    					</div>
    						<input type="text" name="amount"  id="amount" readonly>
  					</div>
                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                          
                            <script src="https://js.paystack.co/v1/inline.js"></script>
  <button type="button" onclick="payWithPaystack()" id="buttonText" href="javascript:void(0)" class="btn btn-success"> Pay </button> 
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
<?php 
$p1 = 50;
$p2 = 100;
$p3 = 150;
$p4 = 200;
$p5 = 250;
$p6 = 500;
$p7 = 750;
$p8 = 1000;
$p9 = 2500;
$p10 = 5000;

?>

<script>
function myFunction() {
  var x = document.getElementById("number_of_votes").value;
  //document.getElementById("demo").value =  x;
  //var value = document.getElementById("demo").value;

  if (x  == '1') {
    document.getElementById("amount").value =  {{$p1}};
  }
  if(x == '2'){
    document.getElementById("amount").value =  {{$p2}};
  }
  if(x == '3'){
    document.getElementById("amount").value =  {{$p3}};
  }
  if(x == '4'){
    document.getElementById("amount").value =  {{$p4}};
  }
  if(x == '5'){
    document.getElementById("amount").value =  {{$p5}};
  }
  if(x == '10'){
    document.getElementById("amount").value =  {{$p6}};
  }
  if(x == '15'){
    document.getElementById("amount").value =  {{$p7}};
  }
  if(x == '20'){
    document.getElementById("amount").value =  {{$p8}};
  }
  if(x == '50'){
    document.getElementById("amount").value =  {{$p9}};
  }
  if(x == '100'){
    document.getElementById("amount").value =  {{$p10}};
  }
}
</script>

{{-- for axios request --}}
<script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.19.0/axios.min.js"></script> 


<script>
  function payWithPaystack(){
    event.preventDefault();
    const name = document.querySelector('#name').value;
    const email = document.querySelector('#email').value;
    const contestant = document.querySelector('#contestant').value;
    const number_of_votes = document.querySelector('#number_of_votes').value;
    const phone = document.querySelector('#phone').value;
    const amount = document.querySelector('#amount').value;


   
    var handler = PaystackPop.setup({
      key: 'pk_test_925832fb39a595d9cc8f2882792914dd9da0b467',//put your public key here
      email: email,
      amount: amount*100,
      currency: "NGN",
      ref: ''+Math.floor((Math.random() * 1000000000) + 1), //pass the transref here// generates a pseudo-unique reference. Please replace with a reference you generated. Or remove the line entirely so our API will generate one for you
      metadata: {
        custom_fields: [
          {
                display_name: "Name",
                variable_name: "name",
                value: name
            },
            {
                display_name: "Mobile Number",
                variable_name: "phone",
                value: phone
            },
            {
                display_name: "Contestant",
                variable_name: "contestant",
                value: contestant
            },
            {
                display_name: "Numbers of votes",
                variable_name: "number_of_votes",
                value: number_of_votes
            }
         ],
         email: email,
         amount: amount,
         votes: number_of_votes,
         contestant: contestant,
         phone: phone,
         name: name
         
      },
      callback: function(response){
        //   alert('success. transaction ref is ' + response.reference);
         
         document.getElementById("buttonText").innerHTML = '<h3>Processing... <i class="fa fa-spinner fa-spin fa-1x fa-fw" aria-hidden="true"></i></h3>';

          $.ajax({
                url: '/verify/'+ response.reference ,
                method: 'GET'
            }).done(function(data) {
             window.location = "/success" 
                   // location.reload();
                
            }).fail(function(err) {

                swal("Opps!", err.message, "error");
              
            })
            
      },
             
    
      onClose: function(){
          alert('window closed');
      }
    });
    handler.openIframe();
  }
</script>


