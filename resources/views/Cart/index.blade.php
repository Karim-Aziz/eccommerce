@php
if (Session::get('app_locale') == 'ar') {
App::setLocale('ar');
} else {
App::setLocale('en');
Session::put(App::setLocale('en'));
}
@endphp
@extends('layouts.app')
@section('title','My Cart')
@section('content')
<!-- ================= Start Cart ================= -->
<div class="cart @if (App::isLocale('ar'))  text-right  @endif">
    <div class="container">
    <div class="title-section mb-5">
        <h2 class="text-uppercase">@lang('My Cart')</h2>
    </div>
    @if ($userCarts->count() > 0)
        <table class="table text-center" id="table">
            <thead>
            <tr>
                <th scope="col">@lang('image')</th>
                <th scope="col">@lang('Product')</th>
                <th scope="col">@lang('Price')</th>
                <th scope="col">@lang('Quantity')</th>
                <th scope="col">@lang('Total')</th>
                <th scope="col">@lang('Remove')</th>
            </tr>
            </thead>
            <tbody>
                @foreach ($userCarts as $place)
                    <tr id="{{$place->id}}">
                        <td class="cart-img clickable-row" data-href="{{ url('/pages/place/'.$place->id)}}">
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
                        </td>
                        <td  class='clickable-row' data-href="{{ url('/pages/place/'.$place->id)}}">
                            @if (App::isLocale('ar'))
                                {{ @$place->title_ar }}
                            @else
                                {{ @$place->title }}
                            @endif
                        </td>
                        <td>
                            @if (@$place->sale)
                                <span class="text-secondary sale">
                                {{ @$place->price_after_discount }} @if (App::isLocale('ar')) جنية @else EL @endif
                                </span>
                            @endif
                            <span class="text-secondary">
                                {{ @$place->price }} @if (App::isLocale('ar')) جنية @else EL @endif
                            </span>
                        </td>
                        <td>
                            <div class="box">
                            <input readonly id="spinner-{{$place->id}}" class="spinner-change" value="{{$place->quantity}}" data-id="{{@$place->id}}" />
                            </div>
                        </td>
                        <td id="total-{{$place->id}}">
                            @if (@$place->sale)
                                {{ @$place->price_after_discount * @$place->quantity  }}
                            @else
                                {{ @$place->price * @$place->quantity  }}
                            @endif
                            @if (App::isLocale('ar')) جنية @else EL @endif
                        </td>

                        <td>
                            <a href="{{ url('/remove') }}" class="remove" data-id="{{@$place->id}}"><i class="far fa-times-circle"></i></a>
                        </td>
                    </tr>
                @endforeach
                <tr>
                    <th>
                        @lang('Amount')
                    </th>
                    <td>

                    </td>
                    <td>

                    </td>
                    <td>

                    </td>
                    <td id="amount">
                        {{ App\Cart::Amount() }}
                    </td>
                    <td >
                        <a href="{{url('/order/checkout')}}" class="btn btn-success btn-block checkout">@lang('Checkout')</a>
                    </td>
                </tr>
            </tbody>
        </table>
    @else
    <div class="row">
        <div class="col-md-12">
            <div class="alert alert-danger" role="alert">
                <strong>@lang('No Results')</strong>
            </div>
        </div>
    </div>

    @endif
    </div>
</div>
<div class="overlay-load"></div>
<!-- ================= End Cart ================= -->
@endsection
@section('css')
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
  <script>
      $(function () {
        $(".spinner-change").spinner({
            spin: function (event, ui) {
                var keepPlus =  $(this) ;
                var id = $(this).attr("data-id");
                if (ui.value >= 1) {
                    var request = $.ajax({
                    url: "/cart/plus/"+id,
                    type: "POST",
                    data: {
                        "_token": "{{ csrf_token() }}",
                        "value" :  ui.value,
                    },
                    dataType: 'json',
                    });
                    request.done(function(msg) {
                        $.ajax({
                        url: "/cart/total/"+id,
                        type: "POST",
                        data: {
                            "_token": "{{ csrf_token() }}"
                        },
                        dataType: 'json'
                        }).done(function(data) {
                            $('#total-'+id).html(data.message);
                        });
                        $.ajax({
                        url: "/cart/amount",
                        type: "POST",
                        data: {
                            "_token": "{{ csrf_token() }}"
                        },
                        dataType: 'json'
                        }).done(function(data) {
                            $('#amount').html(data.message);
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
                } else if (ui.value < 1 ) {
                    var request = $.ajax({
                    url: "/cart/remove/"+id,
                    type: "POST",
                    data: {
                        "_token": "{{ csrf_token() }}"
                    },
                    dataType: 'json',
                    });
                    request.done(function(msg) {
                        $.ajax({
                        url: "/cart/amount",
                        type: "POST",
                        data: {
                            "_token": "{{ csrf_token() }}"
                        },
                        dataType: 'json'
                        }).done(function(data) {
                            $('#amount').html(data.message);
                        });
                        $('#'+id).remove();
                        $.ajax({
                            url: "/cart/count",
                            type: "POST",
                            data: {
                            "_token": "{{ csrf_token() }}"
                            },
                            dataType: 'json',
                        }).done(function(value) {
                            $('#badge-danger').html(value.message);
                            if (value.message == 0){
                                $('#table').remove();
                            }
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
                }
            },
        });
    });
    $(document).ready(function () {
        $(document).on({
            ajaxStart: function(){
                $("body").addClass("loading");
            },
            ajaxStop: function(){
                $("body").removeClass("loading");;
            }
        });
        $(".clickable-row").click(function() {
            window.location = $(this).data("href");
        });
        $('.remove').on('click', function (e) {
            e.preventDefault();
            var id = $(this).attr("data-id");
            var request = $.ajax({
            url: "/cart/remove/"+id,
            type: "POST",
            data: {
                "_token": "{{ csrf_token() }}"
            },
            dataType: 'json',
            });
            request.done(function(msg) {
                //alert( msg.message );
                $('#'+id).remove();
                $.ajax({
                    url: "/cart/amount",
                    type: "POST",
                    data: {
                        "_token": "{{ csrf_token() }}"
                    },
                    dataType: 'json'
                }).done(function(data) {
                    $('#amount').html(data.message);
                });
                $.ajax({
                    url: "/cart/count",
                    type: "POST",
                    data: {
                    "_token": "{{ csrf_token() }}"
                    },
                    dataType: 'json',
                }).done(function(value) {
                    $('#badge-danger').html(value.message);
                    if (value.message == 0){
                        $('#table').remove();
                    }
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
        $('.checkout').on('click', function (e) {
            e.preventDefault();
            var request = $.ajax({
            url: "/order/checkout",
            type: "POST",
            data: {
                "_token": "{{ csrf_token() }}"
            },
            dataType: 'json',
            });
            request.done(function(msg) {
                Swal.fire({
                    position: 'top-end',
                    icon: 'success',
                    title: msg.message,
                    showConfirmButton: false,
                    timer: 1500
                });
                window.location.href = "{{ url('/order')}}";
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
@endsection
