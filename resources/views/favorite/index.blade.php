@php
if (Session::get('app_locale') == 'ar') {
App::setLocale('ar');
} else {
App::setLocale('en');
Session::put(App::setLocale('en'));
}
@endphp
@extends('layouts.app')
@section('title','My Favorite')
@section('content')
<!-- ================= Start Cart ================= -->
<div class="cart @if (App::isLocale('ar'))  text-right  @endif">
    <div class="container">
    <div class="title-section mb-5">
        <h2 class="text-uppercase">@lang('My Favorite')</h2>
    </div>
    @if ($userFavorites->count() > 0)
        <table class="table text-center">
            <thead>
            <tr>
                <th scope="col">@lang('image')</th>
                <th scope="col">@lang('Product')</th>
                <th scope="col">@lang('Price')</th>
                <th scope="col">@lang('Remove')</th>
            </tr>
            </thead>
            <tbody>
                @foreach ($userFavorites as $place)
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
                            <a href="{{ url('/remove') }}" class="remove" data-id="{{@$place->id}}"><i class="far fa-times-circle"></i></a>
                        </td>
                    </tr>
                @endforeach
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
    $(document).ready(function () {
        $(document).on({
            ajaxStart: function(){
                $("body").addClass("loading");
            },
            ajaxStop: function(){
                /*
                setTimeout(function () {
                    $("body").removeClass("loading");
                }, 1000);
                */
                $("body").removeClass("loading");
            }
        });
        $(".clickable-row").click(function() {
            window.location = $(this).data("href");
        });

        $('.remove').on('click', function (e) {
            e.preventDefault();
            var id = $(this).attr("data-id");
            var request = $.ajax({
            url: "/favorite/remove/"+id,
            type: "POST",
            data: {
                "_token": "{{ csrf_token() }}"
            },
            dataType: 'json',
            });

            request.done(function(msg) {
                //alert( msg.message );
                $('#'+id).remove();
            });

            request.fail(function(jqXHR, textStatus) {
            alert( "Request failed: " + textStatus );
            });
        });
    });
  </script>
@endsection
