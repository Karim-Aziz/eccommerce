@php
    $places = App\places::orderBy('id', 'decs')->get()->take(5);
@endphp
<!-- ================================================================================ -->
    <!-- Start Latest Products -->
    <div class="latest_products">
      <div class="container">
        <h3 class="mb-4">Latest Products</h3>
        <div class="owl-carousel owl-theme" id="latest_products">
          @if ($places->count() > 0)
            @foreach($places as $place)
              <div class="item">
            <div class="card text-center">
              <!-- Slider Products -->
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
            <img src="{{ @$src ? @$src : url('/dist/img/user2-160x160.jpg') }}" alt="{{@$place->name}}" class="card-img-top"  />

              <!-- Info All Products -->
              <div class="card-body">
                <div class="info_all_pro">
                  <h5 class="card-title text-center">
                    @if (App::isLocale('ar'))
                      {{ @$place->title_ar }}
                    @else
                      {{ @$place->title }}
                    @endif
                  </h5>
                  <span>
                    @if (App::isLocale('ar'))
                      {{ @$place->price_after_discount_ar }}
                    @else
                      {{ @$place->price_after_discount }}
                    @endif
                  </span>
                  <span class="sale">
                    @if (App::isLocale('ar'))
                      {{ @$place->price_ar }}
                    @else
                      {{ @$place->price }}
                    @endif
                  </span>
                </div>

                 <a class="btn-block" href="{{ url('/pages/place/'.$place->id)}}">@lang('View')</a>
              </div>
            </div>
          </div>
            @endforeach
          @endif

        </div>
      </div>
    </div>
    <!-- End Latest Products -->
