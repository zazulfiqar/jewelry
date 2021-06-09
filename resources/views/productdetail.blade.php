@extends('layouts.app')

@section('content')


<!-- innerBanner start -->
<div class="innerBanner">
    <img src="{{ asset('images/bannerBg.png') }}" class="img-responsive" alt="bannerBg">
    <div class="bannerOverlay">
      <div class="container">
        <h1>Product <span>Detail</span></h1>
      </div>
    </div>
  </div>
  <!-- innerBanner end -->

  <!-- proDetPg start -->


{{-- @php echo "<pre>";
print_r($productdetails['Products'][0]);

    @endphp --}}

  <main class="proDetPg">
    <div class="proDetSec">
      <div class="container">
        <div class="row flexRow">
          <div class="col-md-6 col-sm-6 col-xs-12">
            <div class="proDetImg">
              <img src="{{ $productdetails['Products'][0]['GroupImages'][0]['FullUrl'] }}" class="img-responsive" alt="proDetImg">
              <a href="{{ $productdetails['Products'][0]['GroupImages'][0]['FullUrl'] }}" data-fancybox>
                <i class="fa fa-expand" aria-hidden="true"></i>
             </a>
            </div>
          </div>
          <div class="col-md-6 col-sm-6 col-xs-12">
              <form method="post" action="">
            <div class="proDetCntnt">
              <h2 class="pull-left">{{ $productdetails['Products'][0]['Description'] }}</h2>
              <h3 class="pull-right">${{ $productdetails['Products'][0]['Price']['Value'] }}</h3>
              <div class="clearfix"></div>
              <p>{{ $productdetails['Products'][0]['ShortDescription'] }} </p>
              <p>{{ $productdetails['Products'][0]['GroupDescription'] }}</p>
              <div class="row">
                <div class="col-md-4 col-sm-6 col-xs-12">
                  <div class="qty-input quantitySec">
                    <button class="qty-count qty-count--minus" data-action="minus" type="button"><i class="fa fa-minus"></i></button>
                    <input class="product-qty" name="quantity" min="0" max="10" value="1">
                    <button class="qty-count qty-count--add" data-action="add" type="button"><i class="fa fa-plus"></i></button>
                  </div>
                </div>
                <div class="col-md-8 col-sm-6 col-xs-12">
                  <div class="cartBtn">
                    <a href="{{ asset('add-to-cart/'. $productdetails['Products'][0]['Id']) }}" class="webBtn hvr-sweep-to-right">
                    Add to Cart</a>


                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>
  <!-- proDetPg end -->

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
              <li><a href="products.html">Products</a></li>
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
