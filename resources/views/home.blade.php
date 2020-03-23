@extends('layouts.app')

@section('content')

<div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <div class="get-start-area">
         <a class="btn btn-success" id="rt-quote" role= "button" href="/contestants">Vote Your Contestants Here </a> 
         </div>
    </ol>
   
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="img/a.jpg" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="img/b.jpg" class="d-block w-100" alt="...">
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
  


	<!--================Impress Area =================-->
	<section class="impress_area">
		<div class="container">
			<div class="impress_inner">
          <div class="section-heading text-center">
            <h2>Face of CloudTech Contest </h2>
            
          <p>Welcome to FACE of CloudTech beauty pageant online vote. Vote for your favorite contestant to win the star price of half a million naira and a take home car. Six crown one Queen.

            FACE OF CloudTech BEAUTY PAGEANT is an annual event where we bring together young, elegant, and intelligent girls between the ages of 18 to 30 years to compete for a chance to become the ‘FACE’ of Topflyers magazine. We believe this event affords an opportunity to naturally gifted females, to become famous and carve a niche for themselves in the world of beauty pageants. Notably, this is our 6th edition of FACE OF CloudTech BEAUTY PAGEANT, a pageant in a unique class of its own and attached to a brand magazine-name called (CloudTech Magazine).  <br>
          </p>
        </div>

      <header class="section-header wow bounceInRight" data-wow-delay="0.5s">
<p>
          CloudTech Production is an agency that links the models with multi-national industries for jobs. This job could be a TV/Bill board advert or other jobs as maybe demanded by the prospective multi-national clients.

          With offices in Lagos and in the heart of Rivers State (Ph City) we are without a doubt, Nigeria’s largest, most experienced and dependable events handler.

          We create with you, then make it happen.</p>
           
      </header>
      </div>
		</div>
	</section>
	<!--================End Impress Area =================-->
<section  class="alert alert-primary">
<div class="row" align = "left"> 
         <div class="col-lg-6 col-xl-5 ml-xl-auto">
              <div class="app-download-btn wow fadeInLeft" data-wow-delay="0.9s">
               <h2>Event Details</h2>
                  <p> Date: ...............................  <br>
                      Venue : ...............................  <br>
                      Time: ................................
                    </p>
                 </div>
                            <div class="app-download-area">
                                <div class="app-download-btn wow fadeInUp" data-wow-delay="0.2s">
                                    <!-- Google Store Btn -->
                                    <a href="#">
                                        <i class="fa fa-android"></i>
                                        <p class="mb-0"><span>available on</span> Google Store</p>
                                    </a>
                                </div>
                                <div class="app-download-btn wow fadeInDown" data-wow-delay="0.4s">
                                    <!-- Apple Store Btn -->
                                    <a href="#">
                                        <i class="fa fa-apple"></i>
                                        <p class="mb-0"><span>available on</span> Apple Store</p>
                                    </a>
                                </div>
                            </div>
                            </div>
                    <div class="col-lg-6">
                        <br>
                        <br>
                        <div class="special_description_img">
                             <div class="app-download-btn wow fadeInRight" data-wow-delay="1.2s">
                             <img src="{{url('/img/advert.PNG')}}" alt="Image" height ="320" width = "350"/>
                        </div>
                        </div>
                    </div>
          </div>     
</section>
  

          
    	<!--================Srart Pricing Area =================-->
	<section class="alert alert-primary">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-lg-8 text-center">
					<div class="main_title">
						<button type="button" class="btn btn-primary btn-lg btn-block" disabled>Prices And Awards</button>
					</div>
				</div>
			</div>
			<div class="price_inner row">
				<div class="col-lg-3 col-md-4 col-sm-6 col-xs-6">
					<div class="price_item">
						<div class="price_head">
							<h4>OverAll Winner</h4>
						</div>
						<div class="price_footer">
							<p class="primary_btn btn-lg" ><span>₦500K and A Car</span></p>
						</div>
					</div>
				</div>
     
				<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
					<div class="price_item">
						<div class="price_head">
							<h4>1st Runner Up</h4>
						</div>
						<div class="price_footer">
							<p class="primary_btn btn-lg" ><span>₦300K</span></p>
						</div>
					</div>
				</div>

        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
					<div class="price_item">
						<div class="price_head">
							<h4>2nd Runner Up</h4>
						</div>
						<div class="price_footer">
							<p class="primary_btn btn-lg" ><span>₦200K </span></p>
						</div>
					</div>
				</div>
        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
					<div class="price_item">
						<div class="price_head">
							<h4>3rd - 5th Runner Up</h4>
						</div>
						<div class="price_footer">
							<p class="primary_btn btn-lg" ><span>₦200K </span></p>
						</div>
					</div>
				</div>
			</div>
      <center><p> ==== OTHER PRIZES ==== </p>

<em> All Winners are Entitled to various cash prizes and gift, pet projects plus appearance in Topflyers Magazine International <br>

(T & C Applies) </em>
</center>
</div>
		</div>
	</section>

@endsection
