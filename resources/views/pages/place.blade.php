@php
    if (Session::get('app_locale') == 'ar') {
        App::setLocale('ar');
    } else {
        App::setLocale('en');
        Session::put(App::setLocale('en'));
    }
@endphp

@extends('layouts.app')
@section('title', @$place->name)
@section('content')

<!-- ================= Start background Product ================= -->
    <div class="bac-img">
      <img src="{{ url('/img/bac/1.jpg') }}" />
    </div>
    <!-- ================= End background Product ================= -->
<!-- End background image -->
<!-- ================= Start Details Product ================= -->
  <div class="detals-product  @if (App::isLocale('ar'))  text-right  @endif ">
    <div class="container">
      <div class="card">
        <div class="wrapper row">
          <div class="preview col-md-5">
            <div class="preview-pic tab-content">
              @if (@$place->images )
                @foreach ( @$place->images as $key => $image)
                  <div class="tab-pane @if ($key == 0 )  active  @endif" id="pic-{{@$image->id}}">
                    <img src="{{ @$image->name ? '/img/places_images/'.$image->name : url('/dist/img/user2-160x160.jpg')}}" alt="{{@$place->name}}" />
                  </div>
                @endforeach
              @endif
            </div>

            <ul class="preview-thumbnail nav nav-tabs">
              @if (@$place->images )
                @foreach ( @$place->images as $key => $image)
                  <li class=" @if ($key == 0 )  active  @endif ">
                    <a data-target="#pic-{{@$image->id}}" data-toggle="tab"
                      >
                    <img src="{{ @$image->name ? '/img/places_images/'.$image->name : url('/dist/img/user2-160x160.jpg')}}" alt="{{@$place->name}}" />
                    </a>
                  </li>
                @endforeach
              @endif
            </ul>
          </div>

          <div class="details col-md-7">
            <h2>
               @if (App::isLocale('ar'))
                {{ @$place->title_ar }}
              @else
                {{ @$place->title }}
              @endif
            </h2>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
            <h2>
              <span>
                {{ @$place->price_after_discount }} @if (App::isLocale('ar')) جنية @else EL @endif
              </span>
              <span class="sale">
                {{ @$place->price }} @if (App::isLocale('ar')) جنية @else EL @endif
              </span>
            </h2>

            <h6>@lang('Product Overview')</h6>
            @if (App::isLocale('ar'))
              {!! @$place->desc_ar !!}
            @else
              {!! @$place->desc !!}
            @endif

            <h6>@lang('Size')</h6>
            <ul>
              <li><a href="#">Sm</a></li>
              <li><a href="#">Lg</a></li>
              <li><a href="#">Xl</a></li>
              <li><a href="#">Xxl</a></li>
            </ul>

            <h6>@lang('Color')</h6>
            <ul>
              <li><a href="#">@lang('Black')</a></li>
              <li><a href="#">@lang('White')</a></li>
              <li><a href="#">@lang('Green')</a></li>
              <li><a href="#">@lang('Red')</a></li>
            </ul>

            <div class="add-cart">
              <a href="{{ url('/cart') }}" class="cart-icon" data-id="{{@$place->id}}"> @lang('Add To Cart')</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- ================= End Img Details Product ================= -->

  <!-- ================= Start Description ================= -->
  <div class="description @if (App::isLocale('ar'))  text-right  @endif ">
    <div class="container">
      <div class="accordion" id="accordionExample">
        <div class="card">
          <div class="card-header" id="headingOne">
            <h2 class="mb-0">
              <button
                class="btn btn-link"
                type="button"
                data-toggle="collapse"
                data-target="#collapseOne"
                aria-expanded="true"
                aria-controls="collapseOne"
              >@lang('description')

              </button>
            </h2>
          </div>

          <div
            id="collapseOne"
            class="collapse show"
            aria-labelledby="headingOne"
            data-parent="#accordionExample"
          >
            <div class="card-body">
              @if (App::isLocale('ar'))
                {!! @$place->desc_ar !!}
              @else
                {!! @$place->desc !!}
              @endif
            </div>
          </div>
        </div>

        <div class="card">
          <div class="card-header" id="headingTwo">
            <h2 class="mb-0">
              <button
                class="btn btn-link collapsed"
                type="button"
                data-toggle="collapse"
                data-target="#collapseTwo"
                aria-expanded="false"
                aria-controls="collapseTwo"
              > @lang('review')

              </button>
            </h2>
          </div>
          <div
            id="collapseTwo"
            class="collapse"
            aria-labelledby="headingTwo"
            data-parent="#accordionExample"
          >
            <div class="card-body">
              @if (App::isLocale('ar'))
                {!! @$place->desc_ar !!}
              @else
                {!! @$place->desc !!}
              @endif
            </div>
          </div>
        </div>
        <div class="card">
          <div class="card-header" id="headingThree">
            <h2 class="mb-0">
              <button
                class="btn btn-link collapsed"
                type="button"
                data-toggle="collapse"
                data-target="#collapseThree"
                aria-expanded="false"
                aria-controls="collapseThree"
              >@lang('shipping')

              </button>
            </h2>
          </div>
          <div
            id="collapseThree"
            class="collapse"
            aria-labelledby="headingThree"
            data-parent="#accordionExample"
          >
            <div class="card-body">
              @if (App::isLocale('ar'))
                {!! @$place->desc_ar !!}
              @else
                {!! @$place->desc !!}
              @endif
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
<!-- ================= End Description ================= -->
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
          $.ajax({
            url: "/cart/count",
            type: "POST",
            data: {
              "_token": "{{ csrf_token() }}"
            },
            dataType: 'json',
          }).done(function(value) {
            $('#badge-danger').html(value.message)
          });
          Swal.fire({
            position: 'top-end',
            icon: 'success',
            title: msg.message,
            showConfirmButton: false,
            timer: 1500
          });

        });

        request.fail(function(jqXHR, textStatus) {
          Swal.fire({
            position: 'top-end',
            icon: 'error',
            title: "Request failed: " + textStatus ,
            showConfirmButton: false,
            timer: 1500
          });
        });
      });
    });
  </script>
@endif
@endsection
