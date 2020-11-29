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
                <a href="#"><i class="fas fa-heart"></i></a>
              </button>

              <button
                type="button"
                class="btn btn-secondary"
                title="Add To Cart"
              >
                <a href="cart.html"><i class="fas fa-cart-arrow-down"></i></a>
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
@endif
