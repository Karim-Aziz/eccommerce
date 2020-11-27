@php
$slider = App\Slider::orderBy('id', 'desc')->get();
@endphp
<!-- ================================================================================ -->
@if ($slider->count() > 0)
  <div class="slider">
      <div id="shop-slider" class="owl-carousel owl-theme">
        @foreach ($slider as $item)
        @isset($item->images)
          @foreach ($item->images as $image)
            <div class="item">
              <img src="{{'/img/slider_images/'.$image->name}}"/>
            </div>
          @endforeach
        @endisset
        @endforeach
      </div>
    </div>
@endif

