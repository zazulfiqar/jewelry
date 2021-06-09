@extends('layouts.app')

@section('content')

{{-- <?php // $total = 0 ?> --}}
        {{-- @if(session('cart'))
            @foreach(session('cart') as $id => $details)
                <?php //$total += $details['price'] * $details['quantity'] ?>
                <tr>
                    <td data-th="Product">
                        <div class="row">
                            <div class="col-sm-3 hidden-xs"><img src="{{ $details['photo'] }}" width="100" height="100" class="img-responsive"/></div>
                            <div class="col-sm-9">
                                <h4 class="nomargin">{{ $details['name'] }}</h4>
                            </div>
                        </div>
                    </td>
                    <td data-th="Price">${{ $details['price'] }}</td>
                    <td data-th="Quantity">
                        <input type="number" value="{{ $details['quantity'] }}" class="form-control quantity" />
                    </td>
                    <td data-th="Subtotal" class="text-center">${{ $details['price'] * $details['quantity'] }}</td>
                    <td class="actions" data-th="">
                        <button class="btn btn-info btn-sm update-cart" data-id="{{ $id }}"><i class="fa fa-refresh"></i></button>
                        <button class="btn btn-danger btn-sm remove-from-cart" data-id="{{ $id }}"><i class="fa fa-trash-o"></i></button>
                    </td>
                </tr>
            @endforeach
        @endif --}}
        {{-- </tbody>
        <tfoot>
        <tr class="visible-xs">
            <td class="text-center"><strong>Total {{ $total }}</strong></td>
        </tr>
        <tr>
            <td><a href="{{ url('/') }}" class="btn btn-warning"><i class="fa fa-angle-left"></i> Continue Shopping</a></td>
            <td colspan="2" class="hidden-xs"></td>
            <td class="hidden-xs text-center"><strong>Total ${{ $total }}</strong></td>
        </tr>
        </tfoot>
    </table> --}}

<!-- innerBanner start -->
<div class="innerBanner">
    <img src="images/bannerBg.png" class="img-responsive" alt="bannerBg">
    <div class="bannerOverlay">
      <div class="container">
        <h1>Cart <span></span></h1>
      </div>
    </div>
  </div>
  <!-- innerBanner end -->

  <!-- cartPg start -->
  <main class="cartPg">
    <div class="cartSec">
      <div class="container">
        <div class="col-md-8 col-sm-8 col-xs-12">
          <div class="cartTable">
            <div class="table-responsive">
              <table class="table">
                <tbody>
                    <?php  $total = 0 ?>
                    @if(session('cart'))
                    @foreach(session('cart') as $id => $details)
                    <?php $total += $details['price'] * $details['quantity'] ?>
                  <tr>
                    <td class="col-md-6 col-sm-4">
                      <img src="{{ $details['photo'] }}" class="img-responsive pull-left" alt="cartImg">
                      <span>
                        <h6>Unit price</h6>
                        <h4>$ {{ $details['price'] }}</h4>
                      </span>
                    </td>
                    <td class="col-md-5 col-sm-6">
                        <p>{{ $details['name'] }}</p>
                      <p></p>
                    </td>
                    <td>
                        <button class="btn btn-info btn-sm update-cart" data-id="{{ $id }}"><i class="fa fa-refresh"></i></button>
                        <button class="btn btn-danger btn-sm remove-from-cart" data-id="{{ $id }}"><i class="fa fa-trash-o"></i></button>
                       <td>
                    <th class="col-md-1 col-sm-2">
                      <div class="qty-input quantitySec">
                        <button class="qty-count qty-count--minus" data-action="minus" type="button"><i class="fa fa-minus"></i></button>
                        <input class="product-qty" name="product-qty" min="0" max="100" value="1">
                        <button class="qty-count qty-count--add" data-action="add" type="button"><i class="fa fa-plus"></i></button>
                      </div>

                    </th>
                  </tr>
                  <tr>

                   </tr>
                  @endforeach
                  @endif
                </tbody>
              </table>
            </div>
          </div>
        </div>
        <div class="col-md-4 col-sm-4 col-xs-12">
          <div class="cartTotal">
            <ul>
              <li class="pull-left">Total Products</li>
              <li class="pull-right">2</li>
              <div class="clearfix"></div>
              <li class="pull-left">Total Coupons</li>
              <li class="pull-right">4</li>
              <div class="clearfix"></div>
              <li>You will earn 9 iPoints from this purchase</li>
              <li class="pull-left">
                <h6>Total</h6>
                <p>Inclusive of VAT</p>
              </li>
              <li class="pull-right">
                <h5>$ {{ $total }}</h5>
              </li>
              <div class="clearfix"></div>
            </ul>
          </div>
          <div class="paymentMethod">
            <button class="submit">Select Payment Method</button>
            <p>This is Photoshop's version  of Lorem Ipsum proinst gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem bibendum auctor, nisi elit consequat ipsum</p>
            <img src="images/paymentImg.png" class="img-responsive" alt="paymentImg">
            <a href="checkout.html" class="webBtn hvr-sweep-to-right">Proceed to Checkout</a>
          </div>
        </div>
      </div>
    </div>
  </main>
  <!-- cartPg end -->

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


  <script type="text/javascript">
      $(".update-cart").click(function (e) {
         e.preventDefault();
         var ele = $(this);
          $.ajax({
             url: '{{ url('update-cart') }}',
             method: "patch",
             data: {_token: '{{ csrf_token() }}', id: ele.attr("data-id"), quantity: ele.parents("tr").find(".quantity").val()},
             success: function (response) {
                 window.location.reload();
             }
          });
      });
      $(".remove-from-cart").click(function (e) {
          e.preventDefault();
          var ele = $(this);
          if(confirm("Are you sure")) {
              $.ajax({
                  url: '{{ url('remove-from-cart') }}',
                  method: "DELETE",
                  data: {_token: '{{ csrf_token() }}', id: ele.attr("data-id")},
                  success: function (response) {
                      window.location.reload();
                  }
              });
          }
      });
  </script>


@endsection

