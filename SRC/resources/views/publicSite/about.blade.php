@extends('publicSite.layout.master')

@section('title','User-Profile')
@section('content')



<section class="about-section ">
    
    <div class="aboutContainer">
        
        <div class="full-c-container">
        <div class="external_circle">
            <div class="inner_circle">
            </div>
          </div>
          <div class="circle-text">
            We bring consumers<br> and businesses 
            together <br>to make 
            things better
          </div>   
        </div>    
       
        <div class="aboutText">
            <h1>We're TJrubty.</h1>
            <p>TJrubty was founded in 2022
                 with a vision to create an 
                 independent currency of trust. 
                 We're a digital platform that brings 
                 businesses and consumers together to 
                 foster trust and inspire collaboration. 
                 We're free to use, open to everybody, 
                 and built on transparency.
                <br>
                TJrubty hosts reviews to
                 help consumers shop with confidence,
                  and deliver rich insights to help businesses
                   improve the experiences they offer. The more 
                   consumers use our platform and share their own 
                   opinions, the richer the insights we offer businesses,
                    and the more opportunities they have to earn the trust
                     of consumers from all around Jordan.</p>
        </div>
    </div>
    <div class="aboutImage">
        <img src="{{ asset('images/jordan-businesses.jpg') }}" alt="about-us">
    </div>
    <div class="about-text">
        <section class="ftco-intro ftco-no-pb"
          style="#243665 !important; opacity:unset !important; margin-top:7em">
          <div class="container">
          <div class="row justify-content-center mb-5">
              <div class="col-md-10 text-center heading-section heading-section-white ftco-animate">
              <h2 class="mb-0">A Logo with a true story about our business</h2>
              <img src="{{ asset('images/logo.png') }}" alt="">
              <p>This logo represents the Jordanian market and how people 
                  engage and interact 
                  between each other with care and respect </p>
              </div>
          </div>
          </div>
        </section>
      </div>
        
    
</section>



@endsection