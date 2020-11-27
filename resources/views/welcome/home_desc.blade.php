@php
$slider = App\Slider::orderBy('id', 'desc')->get();
@endphp
<!-- ================================================================================ -->
@if ($slider->count() > 0)
  <!-- Start Slider Images -->
  <div class="slider_images">
    <div class="owl-carousel owl-theme" id="slider_images">
    @foreach ($slider as $item)
    @isset($item->images)

      @foreach ($item->images as $image)
        <div class="item">
          <img src="{{'/img/slider_images/'.$image->name}}" alt="" class="slider image " />
        </div>
      @endforeach
    @endisset
    @endforeach
    </div>
  </div>
  <!-- End Slider Images -->
@endif
    <!-- =========== Start Icons  =========== -->
    <div class="fix-icons">
      <a href="{{ @$settings->Facebook }}" data-toggle="tooltip" data-placement="right" title="Facebook" target="_blank"
        ><i class="fab fa-facebook-f"></i
      ></a>

      <a href="tel:{{ @$settings->phone }}" data-toggle="tooltip" data-placement="right" title="Phone"
        ><i class="fas fa-phone-volume"></i
      ></a>

      <a href="whatsapp://send?abid={{ str_replace('+', '', @$settings->phone)  }}&text=Hello" data-toggle="tooltip" data-placement="right" title="Whatsapp"
        ><i class="fab fa-whatsapp"></i
      ></a>
    </div>
    <!-- =========== End Icons  =========== -->

