@extends('layouts.app')

@section('content')


 <!-- innerBanner start -->
 <div class="innerBanner">
    <img src="images/bannerBg.png" class="img-responsive" alt="bannerBg">
    <div class="bannerOverlay">
      <div class="container">
        <h1>Contact us<span></span></h1>
      </div>
    </div>
  </div>


<!-- contactPg start -->
<main class="contactPg">
    <!-- contactSec start -->
    <div class="contactSec ">
      <div class="container">
        <div class="secHead">
          <h2>Get in Touch with Us</h2>
        </div>
        <div class="row">
          <div class="col-md-8 col-sm-8 col-xs-12">
            <div class="formSec">
              <form>
                <div class="row">
                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <div class="form-group wow fadeinLeft" data-wow-delay="0.3s">
                      <input class="form-control" placeholder="Your First name" type="text">
                      <i aria-hidden="true" class="fa fa-user"></i>
                    </div>
                  </div>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <div class="form-group wow fadeinRight" data-wow-delay="0.3s">
                      <input class="form-control" placeholder="Your Last name" type="text">
                      <i aria-hidden="true" class="fa fa-user"></i> 
                    </div>
                  </div>
                  <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="form-group wow fadeinUp" data-wow-delay="0.6s">
                      <input class="form-control" placeholder="Your Email Address" type="text">
                      <i aria-hidden="true" class="fa fa-phone"></i> 
                    </div>
                  </div>
                  <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="form-group wow fadeinUp" data-wow-delay="0.9s">
                      <textarea cols="" name="" placeholder="Comment" rows="7"></textarea>
                      <i aria-hidden="true" class="fa fa-envelope"></i> 
                    </div>
                  </div>
                  <div class="col-md-12 col-sm-12 col-xs-12">
                    <button class="submit webBtn hvr-sweep-to-right" data-wow-delay="1.2s">Send Messages</button>
                  </div>
                </div>
              </form>
            </div>
          </div>
          <div class="col-md-4 col-sm-4 col-xs-12">
            <div class="mailingSec">
              <ul>
                <li class=" wow fadeInRight" data-wow-delay="0.4s">
                  <i aria-hidden="true" class="fa fa-map-marker pull-left"></i>
                  <span class="pull-right">
                      <h6>Mailing Address:</h6>
                      <p>Devotion Custom Jewelry</p>
                  </span> 
                  <div class="clearfix"></div>
                </li>
                <li class=" wow fadeInRight" data-wow-delay="0.8s">
                  <i aria-hidden="true" class="fa fa-phone pull-left"></i>
                  <span class="pull-right">
                      <h6>Phone</h6>
                      <p><a href="tel:8164619751"></a>
                      816-461-9751</p>
                  </span> 
                  <div class="clearfix"></div>
                </li>
                <li class=" wow fadeInRight" data-wow-delay="1.2s">
                  <i aria-hidden="true" class="fa fa-envelope pull-left"></i>
                  <span class="pull-right">
                      <h6>Email At</h6>
                      <p><a href="mailto:devotioncustomjewelry@gmail.com"></a>devotioncustomjewelry@gmail.com</p>
                  </span> 
                  <div class="clearfix"></div>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- contactSec end -->
  </main>
  <!-- contactPg end -->
  
  <!-- footer start -->
  <footer>
    <div class="container">
      <div class="row">
        <div class="col-md-3 col-sm-3 col-xs-12">
          <div class="footerCntnt footerLogo">
            <a href="{{route('home')}}">
              <img src="images/logo.png" class="img-responsive logo" alt="logo">
            </a>
            <p>Lorem ipsum dolor sit ,  adipiscing elit, sed do tempor .</p>
            <ul class="list-inline socialIcons">
              <li><a href="#"><img src="images/icon-1.png"></a></li>
              <li><a href="#"><img src="images/icon-2.png"></a></li>
              <li><a href="#"><img src="images/icon-3.png"></a></li>
              <li><a href="#"><img src="images/icon-4.png"></a></li>
            </ul>
          </div>
        </div>
        <div class="col-md-3 col-sm-3 col-xs-12">
          <div class="footerCntnt">
            <h6>Quick Links</h6>
            <ul>
              <li><a href="{{route('home')}}">Home</a></li>
              <li><a href="{{route('about')}}">About Us</a></li>
              <li><a href="{{route('products')}}">Products</a></li>
              <li><a href="{{route('blog')}}">Blog</a></li>
              <li><a href="{{route('contact')}}">Contact Us</a></li>
            </ul>
          </div>
        </div>
        <div class="col-md-2 col-sm-2 col-xs-12">
          <div class="footerCntnt">
            <h6>Products</h6>
            <ul>
              <li><a href="#">Lorem Ipsum</a></li>
              <li><a href="#">Dolor Sit </a></li>
              <li><a href="#">Adipiscing Elit </a></li>
              <li><a href="#">Tempor Incidunt</a></li>
              <li><a href="#">Ut Labor </a></li>
            </ul>
          </div>
        </div>
        <div class="col-md-4 col-sm-4 col-xs-12">
          <div class="footerCntnt addressSec">
            <h6>Address</h6>
            <ul>
              <li><i class="fa fa-map-marker"></i>ddress : Devotion Custom Jewelry</li>
              <li><a href="tel:8164619751"><i class="fa fa-phone"></i>816-461-9751</a></li>
              <li><a href="mailto:devotioncustomjewelry@gmail.com"><i class="fa fa-envelope"></i>devotioncustomjewelry@gmail.com</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </footer>
  <!-- footer end -->
  
  <!-- bottomRow start -->
  <div class="bottomRow">
    <div class="container">
      <div class="row flexRow">
        <div class="col-md-4 col-sm-7 col-xs-12">
          <div class="copyrightSec">
            <p>© Copyright 2021 Demo link. All Rights Reserved</p>
          </div>
        </div>
        <div class="col-md-4 col-sm-5 col-xs-12">
          <div class="termNCon">
            <ul class="list-inline">
              <li><a href="termsNCon.html">Terms & Condition</a></li>
              <li><a href="priPolicy.html"> Privacy Policy</a></li>
            </ul>
          </div>
        </div>
        <div class="col-md-4 col-sm-12 col-xs-12">
          <div class="paymentSec">
            <ul class="list-inline">
              <li><a href="#"><img src="images/card-1.png"></a></li>
              <li><a href="#"><img src="images/card-2.png"></a></li>
              <li><a href="#"><img src="images/card-3.png"></a></li>
              <li><a href="#"><img src="images/card-4.png"></a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- bottomRow end -->
  
  <!-- Modal -->
  <div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-body">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
          <img src="images/logo.png" class="img-responsive" alt="logo">
          <form>
            <div class="form-group">
              <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Username">
            </div>
            <div class="form-group">
              <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
            </div>
            <button class="webBtn hvr-sweep-to-right submit">Submit</button>
          </form>
        </div>
      </div>
    </div>
  </div>
  


@endsection