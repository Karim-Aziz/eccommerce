  <!-- Start Portfolio Section -->
@php
 $pages = App\pages::orderBy('id', 'desc')->get();
 @endphp
@if ($pages->count() > 0)
 <div class="portfolio" data-aos="fade-up" data-aos-anchor-placement="top-center" data-aos-duration="2000" id="all-products">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <ul class="filters text-center">
            <li class="active" data-filter="*"><a href="#!">@lang('All')</a></li>
            @foreach ($pages as $page)
            @if (App::isLocale('ar'))
                <li data-filter=".{{$page->name}}"><a href="#!">{{$page->name_ar}}</a></li>
            @else
                <li data-filter=".{{$page->name}}"><a href="#!">{{$page->name}}</a></li>
            @endif
            @endforeach
          </ul>
          <div class="projects">
            <div class="row">
  @foreach ($pages as $page)
      @foreach (@$page->places as $place)
      <!-- Start Web Projects -->
        <div class="col-lg-4 item {{$page->name}}">
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
  @endforeach
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endif

