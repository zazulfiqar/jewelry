@extends('layouts.app')

@section('content')



<!-- innerBanner start -->
<div class="innerBanner">
    <img src="images/bannerBg.png" class="img-responsive" alt="bannerBg">
    <div class="bannerOverlay">
      <div class="container">
        <h1>Blog <span>Detail</span></h1>
      </div>
    </div>
  </div>
  <!-- innerBanner end -->
  
  <!-- contactPg start -->
  <main class="blogDetPg">
    <!-- inspiredSec start -->
    <div class="blogDeSec">
      <div class="container">
        <h2>Blog Detail</h2>
        <div class="row">
          <div class="col-md-8 col-sm-8 col-xs-12">
            <div class="inspired">
              <div class="inspiredImg">
                <img src="images/inspiredImg-1.jpg" class="img-responsive" alt="inspiredImg">
                <h6>15th May,2021</h6>
              </div>
              <h5>Lorem Ipsum Dolor Sit Amet</h5>
              <ul class="list-inline">
                <li>By Jonathon Doe</li>
                <li>Jewellry</li>
                <li>8 Comments</li>
              </ul>
              <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
              <p> It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
              <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
            </div>
          </div>
          <div class="col-md-4 col-sm-4 col-xs-12">
            <div class="rightSec">
              <div class="searchSec">
                <form>
                  <input type="text" placeholder="Search...">
                  <button><i class="fa fa-search"></i></button>
                </form>
              </div>
              <div class="recentPost">
                <h4>Recent Posts</h4>
                <ul>
                  <li><a href="#">Lorem ipsum dolor sit amet</a></li>
                  <li><a href="#">Lorem ipsum dolor sit amet, consectetur adipiscing elit</a></li>
                  <li><a href="#">Lorem ipsum dolor sit amet</a></li>
                  <li><a href="#">Lorem ipsum dolor sit amet, consectetur adipiscing elit</a></li>
                </ul>
              </div>
              <div class="archieves">
                <h4>Archives</h4>
                <ul>
                  <li><a href="#">December 2020</a></li>
                  <li><a href="#">November 2020</a></li>
                  <li><a href="#">October 2020</a></li>
                  <li><a href="#">September 2020</a></li>
                  <li><a href="#">August 2020</a></li>
                  <li><a href="#">July 2020</a></li>
                  <li><a href="#">June 2020</a></li>
                  <li><a href="#">May 2020</a></li>
                  <li><a href="#">April 2020</a></li>
                  <li><a href="#">March 2020</a></li>
                  <li><a href="#">February 2020</a></li>
                  <li><a href="#">January 2020</a></li>
                </ul>
              </div>
              <div class="brandCat">
                <h4>Categories</h4>
                <ul>
                  <li><a href="#">Song Writer</a></li>
                  <li><a href="#">Book Writer</a></li>
                  <li><a href="#">Proofreader Editors</a></li>
                  <li><a href="#">AutoBiography</a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- inspiredSec end -->
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