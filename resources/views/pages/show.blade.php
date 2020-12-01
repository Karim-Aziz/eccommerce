@php
    if (Session::get('app_locale') == 'ar') {
      App::setLocale('ar');
    } else {
      App::setLocale('en');
      Session::put(App::setLocale('en'));
    }
@endphp

@extends('layouts.app')
@section('title', @$page->name)
@section('content')

<!-- ================= Start background Product ================= -->
  <div class="bac-img">
    <img src="{{ url('/img/bac/1.jpg') }}" />
  </div>
<!-- ================= End background Product ================= -->


    <!-- ================= Start Filter Product =================-->
    <div class="products-shop @if (App::isLocale('ar'))  text-right  @endif">
      <div class="container">
        <div class="row">
          <div class="col-md-3">
            <div class="filter-pro">
              <div class="cat">
                <h6>@lang('Browse Categories')</h6>
                @if (count($pages) > 0)
                <ul>
                  @foreach ($pages as $page)
                    <li >
                    @if (App::isLocale('ar'))
                      <a  href="{{url('/pages/'.@$page->id)}}"> {{ @$page->name_ar }}</a>
                    @else
                      <a href="{{url('/pages/'.@$page->id)}}"> {{ @$page->name }}</a>
                    @endif
                    </li>
                  @endforeach
                </ul>
                @endif
              </div>

              <div class="size">
                <h6>Size</h6>
                <ul>
                  <li><a href="#">Small</a></li>
                  <li><a href="#">Large</a></li>
                  <li><a href="#">XL</a></li>
                  <li><a href="#">XXL</a></li>
                </ul>
              </div>

              <div class="price">
                <h6>Price</h6>
                <p>
                  <label for="amount">Price range:</label>
                  <input type="text" id="amount" readonly />
                </p>

                <div id="slider-range"></div>
              </div>

              <div class="color">
                <h6>Color</h6>
                <ul>
                  <li><a href="#">Black</a></li>
                  <li><a href="#">Gold</a></li>
                  <li><a href="#">Spacegrey</a></li>
                  <li><a href="#">Black with red</a></li>
                  <li><a href="#">Black Leather</a></li>
                </ul>
              </div>
            </div>
          </div>

          <div class="col-md-9">
            <div class="filter-search">
              <div class="row">
                <div class="col-md-6">
                  <select class="custom-select" name="sort">
                    <option selected>Sort by</option>
                    <option value="1">Name</option>
                    <option value="2">Price</option>
                    <option value="3">Data</option>
                  </select>
                </div>

                <div class="col-md-6">
                  <select class="custom-select" name="show">
                    <option selected>Show 10</option>
                    <option value="1">Show 20</option>
                    <option value="2">Show 30</option>
                  </select>
                </div>
              </div>
            </div>

            <div class="all-pro">
              <div class="product">
                <div class="container">
                  @if ($places->count() > 0)
                  <div class="row">
                      @foreach($places as $place)
                      <div class="col-md-4">
                        <div class="product-top">
                          <a href="{{ url('/pages/place/'.$place->id)}}">
                          @php
                            if (@$place->images ) {
                              foreach ($place->images as $image) {
                                $src =  '/img/places_images/'.$image->name ;
                                break;
                              }
                            } else {
                              $src = null;
                            }
                          @endphp
                          <img src="{{ @$src ? @$src : url('/dist/img/user2-160x160.jpg') }}" alt="{{@$place->name}}" />
                          </a>
                          <div class="overlay-right">

                            <button
                              type="button"
                              class="btn btn-secondary"
                              title="Quick Shop"
                            >
                              <a href="{{ url('/pages/place/'.$place->id)}}"><i class="fas fa-eye"></i></a>
                            </button>

                            <button
                              type="button"
                              class="btn btn-secondary"
                              title="Add To Wishlist"
                            >
                              <a href="{{ url('/favorite') }}" class="favorite" data-id="{{@$place->id}}"><i class="fas fa-heart"></i></a>
                            </button>

                            <button
                              type="button"
                              class="btn btn-secondary"
                              title="Add To Cart"
                            >
                              <a href="{{ url('/cart') }}" class="cart-icon" data-id="{{@$place->id}}"><i class="fas fa-cart-arrow-down"></i></a>
                            </button>
                          </div>
                        </div>
                        <div class="product-bottom text-center">
                          @if (@$place->sale)
                            <span class="custom-sale">@lang('Sale') </span>
                          @endif
                          <i class="fas fa-star"></i>
                          <i class="fas fa-star"></i>
                          <i class="fas fa-star"></i>
                          <i class="fas fa-star"></i>
                          <i class="fas fa-star-half-alt"></i>
                          <h3>
                            @if (App::isLocale('ar'))
                              {{ @$place->title_ar }}
                            @else
                              {{ @$place->title }}
                            @endif
                          </h3>
                          <h5>
                            @if (@$place->sale)
                              <span class="text-secondary sale">
                                {{ @$place->price_after_discount }} @if (App::isLocale('ar')) جنية @else EL @endif
                              </span>
                            @endif
                            <span class="text-secondary">
                              {{ @$place->price }} @if (App::isLocale('ar')) جنية @else EL @endif
                            </span>
                          </h5>
                        </div>
                      </div>
                      @endforeach
                  </div>
                  <div class="row">
                    <div class="col-md-12">
                      {{$places->links('vendor.pagination.custom')}}
                    </div>
                  </div>
                  @endif
                </div>
              </div>
            </div>


          </div>
        </div>
      </div>
    </div>
    <!-- ================= Start Filter Product =================-->
<div class="overlay-load"></div>
<style>
    .clickable-row{
        cursor: pointer;
    }
    .cart .table .sale {
        text-decoration: line-through;
    }
    .overlay-load{
        display: none;
        position: fixed;
        width: 100%;
        height: 100%;
        top: 0;
        left: 0;
        z-index: 999;
        background: rgba(255,255,255,0.8) url("{{  url('/images/loader.gif')}}") center no-repeat;
    }
    /* Turn off scrollbar when body element has the loading class */
    body.loading{
        overflow: hidden;
    }
    /* Make spinner image visible when body element has the loading class */
    body.loading .overlay-load{
        display: block;
    }
</style>
@endsection

@section('js')
@if (Auth::check())
  <script>
    $(document).on({
        ajaxStart: function(){
            $("body").addClass("loading");
        },
        ajaxStop: function(){
          setTimeout(function () {
              $("body").removeClass("loading");
          }, 1000);
        }
    });
    $(document).ready(function () {
      $('.favorite').on('click', function (e) {
        e.preventDefault();
        var id = $(this).attr("data-id");
        var request = $.ajax({
          url: "/favorite/add/"+id,
          type: "POST",
          data: {
            "_token": "{{ csrf_token() }}"
          },
          dataType: 'json',
        });

        request.done(function(msg) {
          alert( msg.message );
        });

        request.fail(function(jqXHR, textStatus) {
          alert( "Request failed: " + textStatus );
        });
      });
      $('.cart-icon').on('click', function (e) {
        e.preventDefault();
        var id = $(this).attr("data-id");
        var request = $.ajax({
          url: "/cart/add/"+id,
          type: "POST",
          data: {
            "_token": "{{ csrf_token() }}"
          },
          dataType: 'json',
        });

        request.done(function(msg) {
          alert( msg.message );
        });

        request.fail(function(jqXHR, textStatus) {
          alert( "Request failed: " + textStatus );
        });
      });
    });
  </script>
@endif
@endsection
