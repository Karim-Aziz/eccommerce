@php
    $places = App\places::orderBy('view', 'ascd')->take(5)->get();
@endphp

@if ($places->count() > 0)
<!--  ======================= Start Latest Products =============================  -->
  <div class="product">
    <div class="container">
      <div class="title-section mb-5 @if (App::isLocale('ar'))  text-right  @endif">
        <h2 class="text-uppercase">@lang('POPULAR PRODUCTS')</h2>
      </div>
      <div id="product-all-2" class="owl-carousel owl-theme">
        @foreach($places as $place)
        <div class="item">
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
    </div>
  </div>
<!--  ======================= End  Latest Products =============================  -->
<div class="overlay-load"></div>
{{--
<div class="container alert alert-dismissible fade show">
    <div class="row mt-4">
        <div class="col">
            <div class="media bg-warning">
                <i class="fa fa-user-circle align-self-center m-4" style="font-size: 3rem;" aria-hidden="true"></i>
                <div class="media-body bg-light p-4">
                   <div class="row">
                       <div class="col">
                           <h5 class="mt-0">Media object heading</h5>
                       </div>
                       <div class="col-1 text-right">
                           <button type="button" class="close" data-dismiss="alert">&times;</button>
                       </div>
                   </div>
                    Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla.
                </div>
            </div>
        </div>
    </div>
</div>
--}}
@endif
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
