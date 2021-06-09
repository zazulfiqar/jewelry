@extends('layouts.app')

@section('content')

{{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div> --}}



  <!-- Slider Section Starts Here -->
  <div class="banner">
    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
      <div class="carousel-inner" role="listbox">
        <div class="item active">
          <img src="images/bannerBg.png" alt="img">
          <div class="carousel-caption">
            <div class="container">
              <div class="row">
                <div class="col-md-6 col-sm-8 col-xs-6">
                  <div class="bannerCntnt">
                    <h3 class="wow zoomIn" data-wow-delay="0.2s" data-wow-duration="2s">Devotion </h3>
                    <h1 class="wow zoomIn" data-wow-delay="0.4s" data-wow-duration="2s">Custom</h1>
                    <h2 class="wow zoomIn" data-wow-delay="0.6s" data-wow-duration="2s">Jewelry</h2>
                  </div>
                  <ul class="list-inline cntntList">
                    <li>Since 1989</li>
                    <li>Lorem Ipsum Dolor Sit</li>
                  </ul>
                  <ul class="contactList">
                    <li><a href="#"><i class="fa fa-phone"></i></a></li>
                    <li><a href="#"><i class="fa fa-map-marker"></i></a></li>
                  </ul>
                </div>
                <div class="col-md-6 col-sm-6 col-xs-6"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="bannerOverlayImg">
      <div class="container">
        <div class="row">
          <div class="col-md-4 col-sm-4 col-xs-4"></div>
          <div class="col-md-4 col-sm-4 col-xs-4"></div>
          <div class="col-md-4 col-sm-4 col-xs-4">
            <div class="bannerImg">
              <h2>2021</h2>
              <img src="images/bannerImg.jpg" class="img-responsive" alt="bannerImg">
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Slider Section Ends Here -->

  <!-- categorySec start -->
  <div class="categorySec">
    <div class="container">
      <h2>Shop By Category</h2>
      <div class="row">
        <div class="col-md-4 col-sm-4 col-xs-12">
          <div class="category cat-1">
            <img src="images/cat-1.png" class="img-responsive" alt="cat">
            <div class="catCntnt">
              <h6>Custom</h6>
              <h4>Rings</h4>
              <p>Over 100 items</p>
            </div>
          </div>
        </div>
        <div class="col-md-4 col-sm-4 col-xs-12">
          <div class="category cat-2">
            <img src="images/cat-2.png" class="img-responsive" alt="cat">
            <div class="catCntnt">
            <a href="{{route('diamonds')}}">



              <h6>Diamond</h6>
              <h4>Circle <br> Pendants</h4>
              <p>Over 100 items</p>
            </a>
            </div>
          </div>
        </div>
        <div class="col-md-4 col-sm-4 col-xs-12">
          <div class="category cat-3">
            <img src="images/cat-3.png" class="img-responsive" alt="cat">
            <div class="catCntnt">
              <h6>Diamond</h6>
              <h4>Clustor<br> Earrings</h4>
              <p>Over 100 items</p>
            </div>
          </div>
        </div>
        <div class="col-md-4 col-sm-4 col-xs-12">
          <div class="category cat-4">
            <img src="images/cat-4.png" class="img-responsive" alt="cat">
            <div class="catCntnt">
              <h6>Diamond</h6>
              <h4>Heart Shape <br> Pendants</h4>
              <p>Over 100 items</p>
            </div>
          </div>
        </div>
        <div class="col-md-4 col-sm-4 col-xs-12">
          <div class="category cat-5">
            <img src="images/cat-5.png" class="img-responsive" alt="cat">
            <div class="catCntnt">
              <h6>Prong</h6>
              <h4>Diamond Tennis <br> Bracelet</h4>
              <p>Over 100 items</p>
            </div>
          </div>
        </div>
        <div class="col-md-4 col-sm-4 col-xs-12">
          <div class="category cat-6">
            <img src="images/cat-6.png" class="img-responsive" alt="cat">
            <div class="catCntnt">
              <h6>Diamond Shared</h6>
              <h4>Prong Wedding <br> Ring</h4>
              <p>Over 100 items</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- categorySec end -->

  <!-- aboutSec start -->
  <div class="aboutSec">
    <div class="container">
      <div class="row flexRow">
        <div class="col-md-6 col-sm-6 col-xs-12">
          <div class="aboutImg">
            <img src="images/aboutImg.jpg" class="img-responsive" alt="aboutImg">
          </div>
        </div>
        <div class="col-md-6 col-sm-6 col-xs-12">
          <div class="aboutCntnt">
            <h2>About</h2>
            <p>Devotion Custom Jewelry, is a family-owned business founded in 2005, based in Kansas City, Missouri. The birth began with the belief that exceptional quality, craftsmanship, and offering fine jewelry at a great price does NOT have to compromise ethics, trust and integrity. Devotion Custom Jewelry was born as a response to the lack of transparency practices that confront the jewelry industry today.</p>
            <p>We are America's leading online fine jewelry retailer. Devotion Custom Jewelry offers you the largest online collection of genuine certified diamond, gold, moissanite, platinum, pe</p>
            <a href="{{route('about')}}" class="webBtn hvr-sweep-to-right">Learn More</a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- aboutSec end -->

  <!-- exploreSec start -->
  <div class="exploreSec">
    <div class="container">
      <div class="row">
        <div class="col-md-6 col-sm-7 col-xs-12">
          <div class="exploreCntnt">
            <h2>Explore Over <span>2021</span></h2>
            <h3>Our Collection</h3>
            <p>We are America's leading online fine jewelry retailer. Devotion Custom Jewelry offers you the largest online collection </p>
            <a href="{{route('contact')}}" class="webBtn hvr-sweep-to-right">contact Us</a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- exploreSec end -->

  <!-- featureSec start -->
  <div class="featureSec">
    <div class="container">
      <h2>Feature Products</h2>
      <div class="row">
        <div class="col-md-3 col-sm-3 col-xs-12">
          <div class="pro">
            <a href="#">
              <div class="proImg">
                <img src="images/proImg-1.jpg" class="img-responsive" alt="proImg">
              </div>
              <h6>1 row Huggie Earrings</h6>
              <p>Starting at $2,400.00</p>
            </a>
          </div>
        </div>
        <div class="col-md-3 col-sm-3 col-xs-12">
          <div class="pro">
            <a href="#">
              <div class="proImg">
                <img src="images/proImg-2.jpg" class="img-responsive" alt="proImg">
              </div>
              <h6>10 Diamond Lady’s Machine Set Band</h6>
              <p>Starting at $825.00</p>
            </a>
          </div>
        </div>
        <div class="col-md-3 col-sm-3 col-xs-12">
          <div class="pro">
            <a href="#">
              <div class="proImg">
                <img src="images/proImg-3.jpg" class="img-responsive" alt="proImg">
              </div>
              <h6>11 Diamond Milgrian Cross</h6>
              <p>Starting at $3,600.00</p>
            </a>
          </div>
        </div>
        <div class="col-md-3 col-sm-3 col-xs-12">
          <div class="pro">
            <a href="#">
              <div class="proImg">
                <img src="images/proImg-4.jpg" class="img-responsive" alt="proImg">
              </div>
              <h6>4 Diamond Hoop Journey Pendant</h6>
              <p>Starting at $3,975.00</p>
            </a>
          </div>
        </div>
        <div class="col-md-3 col-sm-3 col-xs-12">
          <div class="pro">
            <a href="#">
              <div class="proImg">
                <img src="images/proImg-5.jpg" class="img-responsive" alt="proImg">
              </div>
              <h6>4 Prong Journey pendant </h6>
              <p>Starting at $4,125.00</p>
            </a>
          </div>
        </div>
        <div class="col-md-3 col-sm-3 col-xs-12">
          <div class="pro">
            <a href="#">
              <div class="proImg">
                <img src="images/proImg-6.jpg" class="img-responsive" alt="proImg">
              </div>
              <h6>4 Prong Round Diamond Leverback Earrings</h6>
              <p>Starting at $300.00</p>
            </a>
          </div>
        </div>
        <div class="col-md-3 col-sm-3 col-xs-12">
          <div class="pro">
            <a href="#">
              <div class="proImg">
                <img src="images/proImg-7.jpg" class="img-responsive" alt="proImg">
              </div>
              <h6>5 Diamond Shared Prong Wedding Ring</h6>
              <p>Starting at $3,900.00</p>
            </a>
          </div>
        </div>
        <div class="col-md-3 col-sm-3 col-xs-12">
          <div class="pro">
            <a href="#">
              <div class="proImg">
                <img src="images/proImg-8.jpg" class="img-responsive" alt="proImg">
              </div>
              <h6>8 Diamond Curved Journey  Pendant</h6>
              <p>Starting at $2,700.00</p>
            </a>
          </div>
        </div>
      </div>
      <a href="{{route('products')}}" class="webBtn hvr-sweep-to-right">View All Products</a>
    </div>
  </div>
  <!-- featureSec end -->

  <!-- inspiredSec start -->
  <div class="inspiredSec">
    <div class="container">
      <h2>Get Inspired</h2>
      <div class="row">
        <div class="col-md-4 col-sm-4 col-xs-12">
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
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore .</p>
            <a href="blogDet.html">Read More</a>
          </div>
        </div>
        <div class="col-md-4 col-sm-4 col-xs-12">
          <div class="inspired">
            <div class="inspiredImg">
              <img src="images/inspiredImg-2.jpg" class="img-responsive" alt="inspiredImg">
              <h6>15th May,2021</h6>
            </div>
            <h5>Lorem Ipsum Dolor Sit Amet</h5>
            <ul class="list-inline">
              <li>By Jonathon Doe</li>
              <li>Jewellry</li>
              <li>8 Comments</li>
            </ul>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore .</p>
            <a href="blogDet.html">Read More</a>
          </div>
        </div>
        <div class="col-md-4 col-sm-4 col-xs-12">
          <div class="inspired">
            <div class="inspiredImg">
              <img src="images/inspiredImg-3.jpg" class="img-responsive" alt="inspiredImg">
              <h6>15th May,2021</h6>
            </div>
            <h5>Lorem Ipsum Dolor Sit Amet</h5>
            <ul class="list-inline">
              <li>By Jonathon Doe</li>
              <li>Jewellry</li>
              <li>8 Comments</li>
            </ul>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore .</p>
            <a href="blogDet.html">Read More</a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- inspiredSec end -->

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
          <form method="POST" action="{{ route('login') }}">

            @csrf

            <div class="form-group">
              {{-- <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Username"> --}}
              <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Email">

              @error('email')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror
            </div>
            <div class="form-group">
              {{-- <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password"> --}}
              <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" placeholder="Password" name="password" required autocomplete="current-password">

              @error('password')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror
            </div>
            <button class="webBtn hvr-sweep-to-right submit">Submit</button>
          </form>
        </div>
      </div>
    </div>
  </div>


@endsection
