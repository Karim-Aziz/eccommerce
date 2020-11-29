@php
    $brands = App\brand::all();
@endphp
@if (count($brands) > 0)
<!-- ======================= Start Brand ======================= -->
<div class="brand">
    <div class="container">
    <div id="brand" class="owl-carousel owl-theme">
        @foreach (@$brands as $brand)
        <div class="item">
           <img src="{{ @$brand->image->name ? '/img/brand/'.$brand->image->name : url('/img/brands/logo1.png')}}">
        </div>
        @endforeach
    </div>
    </div>
</div>
<!-- ======================= End Brand ======================= -->
@endif
