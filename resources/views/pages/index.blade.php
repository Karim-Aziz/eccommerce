@extends('layouts.app')
@section('title')
    Article
@endsection
@section('content')
    <!-- ***************************************************************** -->
    <!-- Start title-article -->
    <div class="title-article">
        <div class="container-fluid">
            <div class="row">
                <img src="img/article.jpg">
            </div>
        </div>
    </div>
    <!-- End  title-section -->
    <!-- ***************************************************************** -->
    <!-- Start Sections -->
    <div class="section sections-article">
        <div class="container">
            <div class="row mb-4 my-3">
                @foreach ($articles_categories as $category)
                    <!--Card-->
                    <div class=" col-lg-4 col-md-6 text-right mb-3 ">
                        <a class="link-card" href="{{url('/articles_categories/'.$category->id)}}">
                            <div class="card img-thumbnail bg-dark">
                                <!--Card image-->
                                <img src="{{'/img/articles_categories/'.@$category->image->name}}" class="card-img-top" alt="{{$category->name}}">
                                <!--Card content-->
                                <div class="card-body">
                                    <!--Title-->
                                    <h3 class="card-title">{{$category->name}}</h3>
                                    <!--Text-->
                                </div>
                            </div>
                        </a>
                    </div>
                    <!--/.Card-->
                @endforeach
            </div>
        </div>
    </div>
    <!-- End  Sections -->
@endsection
