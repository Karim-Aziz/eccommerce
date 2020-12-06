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
        <form id="form" action="{{url('/pages/'.$page->id)}}" method="get">
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
                <h6>@lang('Size')</h6>
                <input id ="size" name="size" hidden value="{{ request()->query('size') != null ? request()->query('size') : ''}}">
                @if (count(App\Size::all()) > 0)
                  <ul>
                  @foreach (App\Size::all() as $item)
                      <li >
                      @if (App::isLocale('ar'))
                        <a href="#" class="size-value" data-val="{{ @$item->name_ar }}"> {{ @$item->name_ar }}</a>
                      @else
                        <a href="#" class="size-value" data-val="{{ @$item->name }}"> {{ @$item->name }}</a>
                      @endif
                      </li>
                    @endforeach
                  </ul>
                @endif
              </div>
              <div class="color">
                <h6>@lang('Color')</h6>
                <input id ="color" name="color" hidden value="{{ request()->query('color') != null ? request()->query('color') : ''}}">
                @if (count(App\Color::all()) > 0)
                  <ul>
                  @foreach (App\Color::all() as $item)
                      <li >
                      @if (App::isLocale('ar'))
                        <a href="#" class="color-value" data-val="{{ @$item->name_ar }}"> {{ @$item->name_ar }}</a>
                      @else
                        <a href="#" class="color-value" data-val="{{ @$item->name }}"> {{ @$item->name }}</a>
                      @endif
                      </li>
                    @endforeach
                  </ul>
                @endif
              </div>
            </div>
          </div>
          <div class="col-md-9">
            <div class="filter-search">
              <div class="row">
                <div class="col-md-6">
                  <select class="custom-select" name="sort" id="sort">
                    <option>@lang('Sort by')</option>
                    <option @if(request()->query('sort')== 'Title') selected @endif  value="Title">@lang('Title')</option>
                    <option @if(request()->query('sort')== 'Price') selected @endif  value="Price">@lang('Price')</option>
                    <option @if(request()->query('sort')== 'Date') selected @endif  value="Date">@lang('Date')</option>
                  </select>
                </div>

                <div class="col-md-6">
                  <select class="custom-select" name="show" id="show">
                    <option @if(request()->query('show')== 12) selected @endif value="12">@lang('Show') 12</option>
                    <option @if(request()->query('show') == 24) selected @endif value="24">@lang('Show')  24</option>
                    <option @if(request()->query('show') == 48) selected @endif value="48">@lang('Show')  48</option>
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
          </form>
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
          $("body").removeClass("loading");
        }
    });
    $(document).ready(function () {
      $('.size-value').on('click', function (e) {
        e.preventDefault();
        var val = $(this).attr("data-val");
        $('#size').val(val);
        $("#form").submit();
      });
      $('.color-value').on('click', function (e) {
        e.preventDefault();
        var val = $(this).attr("data-val");
        $('#color').val(val);
        $("#form").submit();
      });
      $('#show').on('change', function (e) {
        $("#form").submit();
      });
      $('#sort').on('change', function (e) {
        $("#form").submit();
      });
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
