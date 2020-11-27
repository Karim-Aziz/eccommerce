 @php
 $pages = App\pages::orderBy('id', 'desc')->get();
 @endphp
@if ($pages->count() > 0)
 <!--  ======================= Start Our Travels ============================== -->
 @foreach ($pages as $page)
 <div class="travels wow fadeInUp">
     <a href="{{url('/pages/'.$page->id)}}">
        @if (App::isLocale('ar'))
            <h1 class="text-center border-buttom">{{$page->name_ar}}</h1>
        @else
            <h1 class="text-center border-buttom">{{$page->name}}</h1>
        @endif
     </a>
     <div class="container">
         <div class="travels-owl">
         <div id="owl-travels-{{$page->id}}" class="owl-carousel owl-theme">
                @if (App::isLocale('ar'))
                    @foreach (@$page->places as $place)
                        <div class="item">
                            <div class="card">
                                <a href="{{url('/places/'.@$place->id)}}">
                                    <img src="{{'/img/places_images/'.@$place->first_image}}"
                                        alt="{{ $place->title_ar }}" class="card-img-top">
                                </a>
                                <div class="card-body">
                                    <h5>{{ $place->title_ar }}</h5>
                                    <div class="row text-center">
                                        <div class="col">
                                            <h6>{{ $place->feature1_ar }}</h6>
                                        </div>
                                        <div class="col">
                                            <h6>{{ $place->feature2_ar }}</h6>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row text-center">
                                        <div class="col">
                                            <h6>{{ $place->feature3_ar }}</h6>
                                        </div>
                                        <div class="col">
                                            <h6>{{ $place->feature4_ar }}</h6>
                                        </div>
                                    </div>
                                    <a href="{{url('/places/'.@$place->id)}}">
                                        <button class="btn-card btn-block">@lang('Explore')</button>
                                    </a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @else
                    @foreach (@$page->places as $place)
                    <div class="item">
                        <div class="card">
                            <a href="{{url('/places/'.@$place->id)}}">
                                <img src="{{'/img/places_images/'.@$place->first_image}}"
                                    alt="{{ $place->title_ar }}" class="card-img-top">
                            </a>
                            <div class="card-body">
                                <h5>{{ $place->title }}</h5>
                                <div class="row text-center">
                                    <div class="col">
                                        <h6>{{ $place->feature1 }}</h6>
                                    </div>
                                    <div class="col">
                                        <h6>{{ $place->feature2 }}</h6>
                                    </div>
                                </div>
                                <hr>
                                <div class="row text-center">
                                    <div class="col">
                                        <h6>{{ $place->feature3 }}</h6>
                                    </div>
                                    <div class="col">
                                        <h6>{{ $place->feature4 }}</h6>
                                    </div>
                                </div>
                                <a href="{{url('/places/'.@$place->id)}}">
                                    <button class="btn-card btn-block">@lang('Explore')</button>
                                </a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                @endif


             </div>
         </div>
     </div>
 </div>
 @endforeach
 <!--  ======================= End Our Travels ============================== -->

 @endif

