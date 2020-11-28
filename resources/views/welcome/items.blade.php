@if ($pages->count() > 0)
 <!--  ======================= Project Area =============================  -->
  <div class="project-area">
    <div class="container">
      <div class="title-section mb-5 @if (App::isLocale('ar'))  text-right  @endif">
        <h2 class="text-uppercase">@lang('Products')</h2>
      </div>
      <div class="button-group text-center">
        <button type="button" class="active" id="btn1" data-filter="*">
          @lang('All')
        </button>
        @foreach ($pages as $page)
        @if (App::isLocale('ar'))
            <button type="button" data-filter=".{{$page->name}}"> {{$page->name_ar}} </button>
        @else
            <button type="button" data-filter=".{{$page->name}}"> {{$page->name}} </button>
        @endif
        @endforeach
      </div>

      <div class="row grid text-center">
        @foreach ($pages as $page)
        @foreach (@$page->places as $place)
        <div class="col-lg-3 col-md-6 col-sm-12 element-item {{$page->name}}">
          <div class="our-project">
            <div class="img">
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
                <img src="{{ @$src ? @$src : url('/dist/img/user2-160x160.jpg') }}" alt="{{@$place->name}}" class="img-fluid"  />
              </a>
            </div>
            <div class="title py-4">
              @if (@$place->sale)
                  <span class="custom-sale">@lang('Sale') </span>
              @endif
              <h4 class="text-uppercase">
                @if (App::isLocale('ar'))
                  {{ @$place->title_ar }}
                @else
                  {{ @$place->title }}
                @endif
              </h4>
              @if (@$place->sale)
                <span class="text-secondary sale">
                  @if (App::isLocale('ar'))
                    {{ @$place->price_after_discount_ar }}
                  @else
                    {{ @$place->price_after_discount }}
                  @endif
                </span>
              @endif
              <span class="text-secondary">
                @if (App::isLocale('ar'))
                  {{ @$place->price_ar }}
                @else
                  {{ @$place->price }}
                @endif
              </span>
            </div>
          </div>
        </div>
        @endforeach
        @endforeach
      </div>
    </div>
  </div>
@endif


