<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Super Hawwa</title>
    <link href="https://fonts.googleapis.com/css?family=Cairo:600&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Almarai:800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="css/assets/owl.theme.default.min.css">
</head>

<body>
    <nav class="navbar fixed-top navbar-expand-lg ">
        <div class="container-fluid">
            <a class="navbar-brand" href="{{url('/')}}"><img src="img/logo.png"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon">
                    <i class="fa fa-bars" style="color:#fff; font-size:28px;"></i>
                </span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link nav-main">الرئيسية</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav-story">قصتنا</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav-article">مقالات</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav-prints">مطبوعات</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav-suggestion">مقترحات</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav-channel">قنواتنا</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav-contact">تواصل معنا</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- ***************************************************************** -->
    <!-- Start Slider -->
    <div class="slider">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="overlay"></div>
                <div class="title">
                    <h1 class="text-center font-bold">مدونة سوبر حوا <span class="h5"><br> وصف عام عن المدونة،وصف عام عن
                            المدونة،وصف عام عن المدونة،وصف عام عن المدونة،وصف عام عن المدونة،وصف عام عن المدونة،</span>
                    </h1>
                </div>
                <div class="carousel-item active">
                    <img class="d-block w-100" src="img/slider-1.jpg" alt="First slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="img/slider-2.jpg" alt="Second slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="img/slider-3.jpg" alt="Third slide">
                </div>
            </div>
        </div>
    </div>
    <!-- End Slider -->
    <!-- ***************************************************************** -->
    <!-- Start Story **قصتنا** -->
    <div class="story">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-8 desc-story">
                    <h1 class="text-center font-bold mt-4">قصتنا</h1>
                    <p class="text-justify">نص تعبيري نص تعبيري نص تعبيري نص تعبيري نص تعبيري نص تعبيري نص تعبيري نص
                        تعبيري نص تعبيري نص تعبيري نص تعبيري نص تعبيري نص تعبيري نص تعبيري نص تعبيري نص تعبيري نص تعبيري
                        نص تعبيري نص تعبيرينص تعبيري نص تعبيري نص تعبيري نص تعبيري نص تعبيري نص تعبيري نص تعبيري نص
                        تعبيري نص تعبيري نص تعبيري نص تعبيري نص تعبيري نص تعبيري نص تعبيري نص تعبيري نص تعبيري نص تعبيري
                        نص تعبيري</p>
                </div>
                <div class="col-md-4 img-story">
                    <img src="img/story.jpg">
                </div>
            </div>
        </div>
    </div>
    <!-- End Story **قصتنا** -->
    <!-- ***************************************************************** -->
    <!-- Start Article **مقالات** -->
    <div class="article">
        <div class="container-fluid mt-4">
            <a href="article.html">
                <h1 class="text-center font-bold mb-4">مقالات</h1>
            </a>
            <div class="owl-carousel owl-theme">
                <div class="ml-2 mr-2">
                    <!--Card-->
                    <div class="main-title-card mb-2 text-center">
                        <a href="#">
                            <h3>قسم المناهج</h3>
                            <p>طالع جميع مقالات القسم هنا</p>
                        </a>
                    </div>
                    <div class="text-right">
                        <div class="card">
                            <!--Card image-->
                            <img src="img/c1.jpg" class="card-img-top" alt="">
                            <!--Card content-->
                            <div class="card-body card-body-new">
                                <!--Title-->
                                <h5 class="card-title">عنوان التدوينة</h5>
                                <!--Text-->
                                <p class="card-text">لوريم إيبسوم(Lorem Ipsum) لوريم إيبسوم(Lorem Ipsum) هو ببساطة نص
                                    شكلي (بمعنى أن الغاية هي الشكل وليس المحتوى) ويُستخدم في صناعات المطابع هو ببساطة نص
                                    شكلي (بمعنى أن الغاية هي الشكل وليس المحتوى) ويُستخدم في صناعات المطابع ودور النشر.
                                </p>
                                <a href="" target="" class="btn btn-md btn-more">طالع المزيد</a>
                                <p class="card-text desc my-3"><small class="text-muted">الكاتب/ <span>حسن
                                            محمد</span></small>
                                    <small class="float-left text-muted">12/10/2019</small></p>
                            </div>
                        </div>
                    </div>
                    <!--/.Card-->
                </div>
                <div class="ml-2 mr-2">
                    <!--Card-->
                    <div class="main-title-card mb-2 text-center">
                        <a href="#">
                            <h3>قسم المناهج</h3>
                            <p>طالع جميع مقالات القسم هنا</p>
                        </a>
                    </div>
                    <div class="text-right">
                        <div class="card">
                            <!--Card image-->
                            <img src="img/c2.jpg" class="card-img-top" alt="">
                            <!--Card content-->
                            <div class="card-body card-body-new">
                                <!--Title-->
                                <h5 class="card-title">عنوان التدوينة</h5>
                                <!--Text-->
                                <p class="card-text">لوريم إيبسوم(Lorem Ipsum) لوريم إيبسوم(Lorem Ipsum) هو ببساطة نص
                                    شكلي (بمعنى أن الغاية هي الشكل وليس المحتوى) ويُستخدم في صناعات المطابع هو ببساطة نص
                                    شكلي (بمعنى أن الغاية هي الشكل وليس المحتوى) ويُستخدم في صناعات المطابع ودور النشر.
                                </p>
                                <a href="" target="" class="btn btn-md btn-more">طالع المزيد</a>
                                <p class="card-text desc my-3"><small class="text-muted">الكاتب/ <span>حسن
                                            محمد</span></small>
                                    <small class="float-left text-muted">12/10/2019</small></p>
                            </div>
                        </div>
                    </div>
                    <!--/.Card-->
                </div>
                <div class="ml-2 mr-2">
                    <!--Card-->
                    <div class="main-title-card mb-2 text-center">
                        <a href="#">
                            <h3>قسم المناهج</h3>
                            <p>طالع جميع مقالات القسم هنا</p>
                        </a>
                    </div>
                    <div class="text-right">
                        <div class="card">
                            <!--Card image-->
                            <img src="img/c3.jpg" class="card-img-top" alt="">
                            <!--Card content-->
                            <div class="card-body card-body-new">
                                <!--Title-->
                                <h5 class="card-title">عنوان التدوينة</h5>
                                <!--Text-->
                                <p class="card-text">لوريم إيبسوم(Lorem Ipsum) لوريم إيبسوم(Lorem Ipsum) هو ببساطة نص
                                    شكلي (بمعنى أن الغاية هي الشكل وليس المحتوى) ويُستخدم في صناعات المطابع هو ببساطة نص
                                    شكلي (بمعنى أن الغاية هي الشكل وليس المحتوى) ويُستخدم في صناعات المطابع ودور النشر.
                                </p>
                                <a href="" target="" class="btn btn-md btn-more">طالع المزيد</a>
                                <p class="card-text desc my-3"><small class="text-muted">الكاتب/ <span>حسن
                                            محمد</span></small>
                                    <small class="float-left text-muted">12/10/2019</small></p>
                            </div>
                        </div>
                    </div>
                    <!--/.Card-->
                </div>
                <div class="ml-2 mr-2">
                    <!--Card-->
                    <div class="main-title-card mb-2 text-center">
                        <a href="#">
                            <h3>قسم المناهج</h3>
                            <p>طالع جميع مقالات القسم هنا</p>
                        </a>
                    </div>
                    <div class="text-right">
                        <div class="card">
                            <!--Card image-->
                            <img src="img/c4.jpg" class="card-img-top" alt="">
                            <!--Card content-->
                            <div class="card-body card-body-new">
                                <!--Title-->
                                <h5 class="card-title">عنوان التدوينة</h5>
                                <!--Text-->
                                <p class="card-text">لوريم إيبسوم(Lorem Ipsum) لوريم إيبسوم(Lorem Ipsum) هو ببساطة نص
                                    شكلي (بمعنى أن الغاية هي الشكل وليس المحتوى) ويُستخدم في صناعات المطابع هو ببساطة نص
                                    شكلي (بمعنى أن الغاية هي الشكل وليس المحتوى) ويُستخدم في صناعات المطابع ودور النشر.
                                </p>
                                <a href="" target="" class="btn btn-md btn-more">طالع المزيد</a>
                                <p class="card-text desc my-3"><small class="text-muted">الكاتب/ <span>حسن
                                            محمد</span></small>
                                    <small class="float-left text-muted">12/10/2019</small></p>
                            </div>
                        </div>
                    </div>
                    <!--/.Card-->
                </div>
                <div class="ml-2 mr-2">
                    <!--Card-->
                    <div class="main-title-card mb-2 text-center">
                        <a href="#">
                            <h3>قسم المناهج</h3>
                            <p>طالع جميع مقالات القسم هنا</p>
                        </a>
                    </div>
                    <div class=" text-right">
                        <div class="card">
                            <!--Card image-->
                            <img src="img/c2.jpg" class="card-img-top" alt="">
                            <!--Card content-->
                            <div class="card-body card-body-new">
                                <!--Title-->
                                <h5 class="card-title">عنوان التدوينة</h5>
                                <!--Text-->
                                <p class="card-text">لوريم إيبسوم(Lorem Ipsum) لوريم إيبسوم(Lorem Ipsum) هو ببساطة نص
                                    شكلي (بمعنى أن الغاية هي الشكل وليس المحتوى) ويُستخدم في صناعات المطابع هو ببساطة نص
                                    شكلي (بمعنى أن الغاية هي الشكل وليس المحتوى) ويُستخدم في صناعات المطابع ودور النشر.
                                </p>
                                <a href="" target="" class="btn btn-md btn-more">طالع المزيد</a>
                                <p class="card-text desc my-3"><small class="text-muted">الكاتب/ <span>حسن
                                            محمد</span></small>
                                    <small class="float-left text-muted">12/10/2019</small></p>
                            </div>
                        </div>
                    </div>
                    <!--/.Card-->
                </div>
                <div class="ml-2 mr-2">
                    <!--Card-->
                    <div class="main-title-card mb-2 text-center">
                        <a href="#">
                            <h3>قسم المناهج</h3>
                            <p>طالع جميع مقالات القسم هنا</p>
                        </a>
                    </div>
                    <div class="text-right">
                        <div class="card">
                            <!--Card image-->
                            <img src="img/c3.jpg" class="card-img-top" alt="">
                            <!--Card content-->
                            <div class="card-body card-body-new">
                                <!--Title-->
                                <h5 class="card-title">عنوان التدوينة</h5>
                                <!--Text-->
                                <p class="card-text">لوريم إيبسوم(Lorem Ipsum) لوريم إيبسوم(Lorem Ipsum) هو ببساطة نص
                                    شكلي (بمعنى أن الغاية هي الشكل وليس المحتوى) ويُستخدم في صناعات المطابع هو ببساطة نص
                                    شكلي (بمعنى أن الغاية هي الشكل وليس المحتوى) ويُستخدم في صناعات المطابع ودور النشر.
                                </p>
                                <a href="" target="" class="btn btn-md btn-more">طالع المزيد</a>
                                <p class="card-text desc my-3"><small class="text-muted">الكاتب/ <span>حسن
                                            محمد</span></small>
                                    <small class="float-left text-muted">12/10/2019</small></p>
                            </div>
                        </div>
                    </div>
                    <!--/.Card-->
                </div>
            </div>
        </div>
    </div>
    <!-- End Article **مقالات** -->
    <!-- ***************************************************************** -->
    <!-- ***************************************************************** -->
    <!-- Start prints **مطبوعات** -->
    <div class="prints">
        <div class="container-fluid mt-4">
            <a href="prints.html">
                <h1 class="text-center font-bold mb-4">مطبوعات</h1>
            </a>
            <div class="owl-carousel owl-theme">
                <!--Card-->
                <div class="ml-2 mr-2">
                    <div class="text-right">
                        <div class="card">
                            <!--Card image-->
                            <img src="img/c1.jpg" class="card-img-top" alt="">
                            <!--Card content-->
                            <div class="card-body">
                                <!--Title-->
                                <h5 class="card-title">عنوان التدوينة</h5>
                                <!--Text-->
                                <p class="card-text">لوريم إيبسوم(Lorem Ipsum) لوريم إيبسوم(Lorem Ipsum) هو ببساطة نص
                                    شكلي (بمعنى أن الغاية هي الشكل وليس المحتوى) ويُستخدم في صناعات المطابع هو ببساطة نص
                                    شكلي (بمعنى أن الغاية هي الشكل وليس المحتوى) ويُستخدم في صناعات المطابع ودور النشر.
                                </p>
                                <a href="" target="" class="btn btn-md btn-more">طالع المزيد</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!--/.Card-->
                <!--Card-->
                <div class="ml-2 mr-2">
                    <div class="text-right">
                        <div class="card">
                            <!--Card image-->
                            <img src="img/c2.jpg" class="card-img-top" alt="">
                            <!--Card content-->
                            <div class="card-body">
                                <!--Title-->
                                <h5 class="card-title">عنوان التدوينة</h5>
                                <!--Text-->
                                <p class="card-text">لوريم إيبسوم(Lorem Ipsum) لوريم إيبسوم(Lorem Ipsum) هو ببساطة نص
                                    شكلي (بمعنى أن الغاية هي الشكل وليس المحتوى) ويُستخدم في صناعات المطابع هو ببساطة نص
                                    شكلي (بمعنى أن الغاية هي الشكل وليس المحتوى) ويُستخدم في صناعات المطابع ودور النشر.
                                </p>
                                <a href="" target="" class="btn btn-md btn-more">طالع المزيد</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!--/.Card-->
                <!--Card-->
                <div class="ml-2 mr-2">
                    <div class="text-right">
                        <div class="card">
                            <!--Card image-->
                            <img src="img/c3.jpg" class="card-img-top" alt="">
                            <!--Card content-->
                            <div class="card-body">
                                <!--Title-->
                                <h5 class="card-title">عنوان التدوينة</h5>
                                <!--Text-->
                                <p class="card-text">لوريم إيبسوم(Lorem Ipsum) لوريم إيبسوم(Lorem Ipsum) هو ببساطة نص
                                    شكلي (بمعنى أن الغاية هي الشكل وليس المحتوى) ويُستخدم في صناعات المطابع هو ببساطة نص
                                    شكلي (بمعنى أن الغاية هي الشكل وليس المحتوى) ويُستخدم في صناعات المطابع ودور النشر.
                                </p>
                                <a href="" target="" class="btn btn-md btn-more">طالع المزيد</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!--/.Card-->
                <!--Card-->
                <div class="ml-2 mr-2">
                    <div class="text-right">
                        <div class="card">
                            <!--Card image-->
                            <img src="img/c4.jpg" class="card-img-top" alt="">
                            <!--Card content-->
                            <div class="card-body">
                                <!--Title-->
                                <h5 class="card-title">عنوان التدوينة</h5>
                                <!--Text-->
                                <p class="card-text">لوريم إيبسوم(Lorem Ipsum) لوريم إيبسوم(Lorem Ipsum) هو ببساطة نص
                                    شكلي (بمعنى أن الغاية هي الشكل وليس المحتوى) ويُستخدم في صناعات المطابع هو ببساطة نص
                                    شكلي (بمعنى أن الغاية هي الشكل وليس المحتوى) ويُستخدم في صناعات المطابع ودور النشر.
                                </p>
                                <a href="" target="" class="btn btn-md btn-more">طالع المزيد</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!--/.Card-->
                <!--Card-->
                <div class="ml-2 mr-2">
                    <div class="text-right">
                        <div class="card">
                            <!--Card image-->
                            <img src="img/c2.jpg" class="card-img-top" alt="">
                            <!--Card content-->
                            <div class="card-body">
                                <!--Title-->
                                <h5 class="card-title">عنوان التدوينة</h5>
                                <!--Text-->
                                <p class="card-text">لوريم إيبسوم(Lorem Ipsum) لوريم إيبسوم(Lorem Ipsum) هو ببساطة نص
                                    شكلي (بمعنى أن الغاية هي الشكل وليس المحتوى) ويُستخدم في صناعات المطابع هو ببساطة نص
                                    شكلي (بمعنى أن الغاية هي الشكل وليس المحتوى) ويُستخدم في صناعات المطابع ودور النشر.
                                </p>
                                <a href="" target="" class="btn btn-md btn-more">طالع المزيد</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!--/.Card-->
                <!--Card-->
                <div class="ml-2 mr-2">
                    <div class="text-right">
                        <div class="card">
                            <!--Card image-->
                            <img src="img/c4.jpg" class="card-img-top" alt="">
                            <!--Card content-->
                            <div class="card-body">
                                <!--Title-->
                                <h5 class="card-title">عنوان التدوينة</h5>
                                <!--Text-->
                                <p class="card-text">لوريم إيبسوم(Lorem Ipsum) لوريم إيبسوم(Lorem Ipsum) هو ببساطة نص
                                    شكلي (بمعنى أن الغاية هي الشكل وليس المحتوى) ويُستخدم في صناعات المطابع هو ببساطة نص
                                    شكلي (بمعنى أن الغاية هي الشكل وليس المحتوى) ويُستخدم في صناعات المطابع ودور النشر.
                                </p>
                                <a href="" target="" class="btn btn-md btn-more">طالع المزيد</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!--/.Card-->
            </div>
        </div>
    </div>
    <!-- End prints **مطبوعات** -->
    <!-- ***************************************************************** -->
    <!-- ***************************************************************** -->
    <!-- Start Suggestion **مقترحات** -->
    <div class="suggestion">
        <div class="container-fluid mt-4">
            <a href="suggestion.html">
                <h1 class="text-center font-bold mb-4">مقترحات</h1>
            </a>
            <div class="owl-carousel owl-theme">
                <div class="ml-2 mr-2">
                    <!--Card-->
                    <div class="main-title-card mb-2 text-center">
                        <a href="#">
                            <h3>قسم المناهج</h3>
                            <p>طالع جميع مقالات القسم هنا</p>
                        </a>
                    </div>
                    <div class="text-right">
                        <div class="card">
                            <!--Card image-->
                            <img src="img/c1.jpg" class="card-img-top" alt="">
                            <!--Card content-->
                            <div class="card-body card-body-new">
                                <!--Title-->
                                <h5 class="card-title">عنوان التدوينة</h5>
                                <!--Text-->
                                <p class="card-text">لوريم إيبسوم(Lorem Ipsum) لوريم إيبسوم(Lorem Ipsum) هو ببساطة نص
                                    شكلي (بمعنى أن الغاية هي الشكل وليس المحتوى) ويُستخدم في صناعات المطابع هو ببساطة نص
                                    شكلي (بمعنى أن الغاية هي الشكل وليس المحتوى) ويُستخدم في صناعات المطابع ودور النشر.
                                </p>
                                <a href="" target="" class="btn btn-md btn-more">طالع المزيد</a>
                                <p class="card-text desc my-3"><small class="text-muted">الكاتب/ <span>حسن
                                            محمد</span></small>
                                    <small class="float-left text-muted">12/10/2019</small></p>
                            </div>
                        </div>
                    </div>
                    <!--/.Card-->
                </div>
                <div class="ml-2 mr-2">
                    <!--Card-->
                    <div class="main-title-card mb-2 text-center">
                        <a href="#">
                            <h3>قسم المناهج</h3>
                            <p>طالع جميع مقالات القسم هنا</p>
                        </a>
                    </div>
                    <div class="text-right">
                        <div class="card">
                            <!--Card image-->
                            <img src="img/c2.jpg" class="card-img-top" alt="">
                            <!--Card content-->
                            <div class="card-body card-body-new">
                                <!--Title-->
                                <h5 class="card-title">عنوان التدوينة</h5>
                                <!--Text-->
                                <p class="card-text">لوريم إيبسوم(Lorem Ipsum) لوريم إيبسوم(Lorem Ipsum) هو ببساطة نص
                                    شكلي (بمعنى أن الغاية هي الشكل وليس المحتوى) ويُستخدم في صناعات المطابع هو ببساطة نص
                                    شكلي (بمعنى أن الغاية هي الشكل وليس المحتوى) ويُستخدم في صناعات المطابع ودور النشر.
                                </p>
                                <a href="" target="" class="btn btn-md btn-more">طالع المزيد</a>
                                <p class="card-text desc my-3"><small class="text-muted">الكاتب/ <span>حسن
                                            محمد</span></small>
                                    <small class="float-left text-muted">12/10/2019</small></p>
                            </div>
                        </div>
                    </div>
                    <!--/.Card-->
                </div>
                <div class="ml-2 mr-2">
                    <!--Card-->
                    <div class="main-title-card mb-2 text-center">
                        <a href="#">
                            <h3>قسم المناهج</h3>
                            <p>طالع جميع مقالات القسم هنا</p>
                        </a>
                    </div>
                    <div class="text-right">
                        <div class="card">
                            <!--Card image-->
                            <img src="img/c3.jpg" class="card-img-top" alt="">
                            <!--Card content-->
                            <div class="card-body card-body-new">
                                <!--Title-->
                                <h5 class="card-title">عنوان التدوينة</h5>
                                <!--Text-->
                                <p class="card-text">لوريم إيبسوم(Lorem Ipsum) لوريم إيبسوم(Lorem Ipsum) هو ببساطة نص
                                    شكلي (بمعنى أن الغاية هي الشكل وليس المحتوى) ويُستخدم في صناعات المطابع هو ببساطة نص
                                    شكلي (بمعنى أن الغاية هي الشكل وليس المحتوى) ويُستخدم في صناعات المطابع ودور النشر.
                                </p>
                                <a href="" target="" class="btn btn-md btn-more">طالع المزيد</a>
                                <p class="card-text desc my-3"><small class="text-muted">الكاتب/ <span>حسن
                                            محمد</span></small>
                                    <small class="float-left text-muted">12/10/2019</small></p>
                            </div>
                        </div>
                    </div>
                    <!--/.Card-->
                </div>
                <div class="ml-2 mr-2">
                    <!--Card-->
                    <div class="main-title-card mb-2 text-center">
                        <a href="#">
                            <h3>قسم المناهج</h3>
                            <p>طالع جميع مقالات القسم هنا</p>
                        </a>
                    </div>
                    <div class="text-right">
                        <div class="card">
                            <!--Card image-->
                            <img src="img/c4.jpg" class="card-img-top" alt="">
                            <!--Card content-->
                            <div class="card-body card-body-new">
                                <!--Title-->
                                <h5 class="card-title">عنوان التدوينة</h5>
                                <!--Text-->
                                <p class="card-text">لوريم إيبسوم(Lorem Ipsum) لوريم إيبسوم(Lorem Ipsum) هو ببساطة نص
                                    شكلي (بمعنى أن الغاية هي الشكل وليس المحتوى) ويُستخدم في صناعات المطابع هو ببساطة نص
                                    شكلي (بمعنى أن الغاية هي الشكل وليس المحتوى) ويُستخدم في صناعات المطابع ودور النشر.
                                </p>
                                <a href="" target="" class="btn btn-md btn-more">طالع المزيد</a>
                                <p class="card-text desc my-3"><small class="text-muted">الكاتب/ <span>حسن
                                            محمد</span></small>
                                    <small class="float-left text-muted">12/10/2019</small></p>
                            </div>
                        </div>
                    </div>
                    <!--/.Card-->
                </div>
                <div class="ml-2 mr-2">
                    <!--Card-->
                    <div class="main-title-card mb-2 text-center">
                        <a href="#">
                            <h3>قسم المناهج</h3>
                            <p>طالع جميع مقالات القسم هنا</p>
                        </a>
                    </div>
                    <div class=" text-right">
                        <div class="card">
                            <!--Card image-->
                            <img src="img/c2.jpg" class="card-img-top" alt="">
                            <!--Card content-->
                            <div class="card-body card-body-new">
                                <!--Title-->
                                <h5 class="card-title">عنوان التدوينة</h5>
                                <!--Text-->
                                <p class="card-text">لوريم إيبسوم(Lorem Ipsum) لوريم إيبسوم(Lorem Ipsum) هو ببساطة نص
                                    شكلي (بمعنى أن الغاية هي الشكل وليس المحتوى) ويُستخدم في صناعات المطابع هو ببساطة نص
                                    شكلي (بمعنى أن الغاية هي الشكل وليس المحتوى) ويُستخدم في صناعات المطابع ودور النشر.
                                </p>
                                <a href="" target="" class="btn btn-md btn-more">طالع المزيد</a>
                                <p class="card-text desc my-3"><small class="text-muted">الكاتب/ <span>حسن
                                            محمد</span></small>
                                    <small class="float-left text-muted">12/10/2019</small></p>
                            </div>
                        </div>
                    </div>
                    <!--/.Card-->
                </div>
                <div class="ml-2 mr-2">
                    <!--Card-->
                    <div class="main-title-card mb-2 text-center">
                        <a href="#">
                            <h3>قسم المناهج</h3>
                            <p>طالع جميع مقالات القسم هنا</p>
                        </a>
                    </div>
                    <div class="text-right">
                        <div class="card">
                            <!--Card image-->
                            <img src="img/c3.jpg" class="card-img-top" alt="">
                            <!--Card content-->
                            <div class="card-body card-body-new">
                                <!--Title-->
                                <h5 class="card-title">عنوان التدوينة</h5>
                                <!--Text-->
                                <p class="card-text">لوريم إيبسوم(Lorem Ipsum) لوريم إيبسوم(Lorem Ipsum) هو ببساطة نص
                                    شكلي (بمعنى أن الغاية هي الشكل وليس المحتوى) ويُستخدم في صناعات المطابع هو ببساطة نص
                                    شكلي (بمعنى أن الغاية هي الشكل وليس المحتوى) ويُستخدم في صناعات المطابع ودور النشر.
                                </p>
                                <a href="" target="" class="btn btn-md btn-more">طالع المزيد</a>
                                <p class="card-text desc my-3"><small class="text-muted">الكاتب/ <span>حسن
                                            محمد</span></small>
                                    <small class="float-left text-muted">12/10/2019</small></p>
                            </div>
                        </div>
                    </div>
                    <!--/.Card-->
                </div>
            </div>
        </div>
    </div>
    <!-- End Suggestion **مقترحات** -->
    <!-- ***************************************************************** -->
    <!-- ***************************************************************** -->
    <!-- Start Channel **قنواتنا** -->
    <div class="channel">
        <div class="container-fluid mt-4">
            <a href="channel.html">
                <h1 class="text-center font-bold mb-4">قنواتنا</h1>
            </a>
            <div class="owl-carousel owl-theme">
                <div class="ml-2 mr-2">
                    <!--Card-->
                    <div class="text-right">
                        <div class="card card-channel bg-dark">
                            <!--Card image-->

                            <iframe class="card-channel-video " src="https://www.youtube.com/embed/WBnSocEezoE"
                                frameborder="0"
                                allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                                allowfullscreen></iframe>
                            <!--Card content-->
                            <div class="card-body">
                                <!--Title-->
                                <h5 class="card-title">عنوان الفيديو</h5>
                                <!--Text-->
                                <p class="card-text">لوريم إيبسوم(Lorem Ipsum) لوريم إيبسوم(Lorem Ipsum) هو ببساطة نص
                                    شكلي (بمعنى أن الغاية هي الشكل وليس المحتوى) ويُستخدم في صناعات المطابع هو ببساطة نص
                                    شكلي (بمعنى أن الغاية هي الشكل وليس المحتوى) ويُستخدم في صناعات المطابع ودور النشر.
                                </p>
                            </div>
                        </div>
                    </div>
                    <!--/.Card-->
                </div>
                <div class="ml-2 mr-2">
                    <!--Card-->
                    <div class="text-right">
                        <div class="card card-channel bg-dark">
                            <!--Card image-->

                            <iframe class="card-channel-video " src="https://www.youtube.com/embed/7z8VhcmIEgM"
                                frameborder="0"
                                allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                                allowfullscreen></iframe>
                            <!--Card content-->
                            <div class="card-body">
                                <!--Title-->
                                <h5 class="card-title">عنوان الفيديو</h5>
                                <!--Text-->
                                <p class="card-text">لوريم إيبسوم(Lorem Ipsum) لوريم إيبسوم(Lorem Ipsum) هو ببساطة نص
                                    شكلي (بمعنى أن الغاية هي الشكل وليس المحتوى) ويُستخدم في صناعات المطابع هو ببساطة نص
                                    شكلي (بمعنى أن الغاية هي الشكل وليس المحتوى) ويُستخدم في صناعات المطابع ودور النشر.
                                </p>
                            </div>
                        </div>
                    </div>
                    <!--/.Card-->
                </div>
                <div class="ml-2 mr-2">
                    <!--Card-->
                    <div class="text-right">
                        <div class="card card-channel bg-dark">
                            <!--Card image-->

                            <iframe class="card-channel-video " src="https://www.youtube.com/embed/c5VyGjCShEw"
                                frameborder="0"
                                allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                                allowfullscreen></iframe>
                            <!--Card content-->
                            <div class="card-body">
                                <!--Title-->
                                <h5 class="card-title">عنوان الفيديو</h5>
                                <!--Text-->
                                <p class="card-text">لوريم إيبسوم(Lorem Ipsum) لوريم إيبسوم(Lorem Ipsum) هو ببساطة نص
                                    شكلي (بمعنى أن الغاية هي الشكل وليس المحتوى) ويُستخدم في صناعات المطابع هو ببساطة نص
                                    شكلي (بمعنى أن الغاية هي الشكل وليس المحتوى) ويُستخدم في صناعات المطابع ودور النشر.
                                </p>
                            </div>
                        </div>
                    </div>
                    <!--/.Card-->
                </div>
                <div class="ml-2 mr-2">
                    <!--Card-->
                    <div class="text-right">
                        <div class="card card-channel bg-dark">
                            <!--Card image-->

                            <iframe class="card-channel-video " src="https://www.youtube.com/embed/IGTyRrutzNk"
                                frameborder="0"
                                allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                                allowfullscreen></iframe>
                            <!--Card content-->
                            <div class="card-body">
                                <!--Title-->
                                <h5 class="card-title">عنوان الفيديو</h5>
                                <!--Text-->
                                <p class="card-text">لوريم إيبسوم(Lorem Ipsum) لوريم إيبسوم(Lorem Ipsum) هو ببساطة نص
                                    شكلي (بمعنى أن الغاية هي الشكل وليس المحتوى) ويُستخدم في صناعات المطابع هو ببساطة نص
                                    شكلي (بمعنى أن الغاية هي الشكل وليس المحتوى) ويُستخدم في صناعات المطابع ودور النشر.
                                </p>
                            </div>
                        </div>
                    </div>
                    <!--/.Card-->
                </div>
                <div class="ml-2 mr-2">
                    <!--Card-->
                    <div class="text-right">
                        <div class="card card-channel bg-dark">
                            <!--Card image-->

                            <iframe class="card-channel-video " src="https://www.youtube.com/embed/7z8VhcmIEgM"
                                frameborder="0"
                                allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                                allowfullscreen></iframe>
                            <!--Card content-->
                            <div class="card-body">
                                <!--Title-->
                                <h5 class="card-title">عنوان الفيديو</h5>
                                <!--Text-->
                                <p class="card-text">لوريم إيبسوم(Lorem Ipsum) لوريم إيبسوم(Lorem Ipsum) هو ببساطة نص
                                    شكلي (بمعنى أن الغاية هي الشكل وليس المحتوى) ويُستخدم في صناعات المطابع هو ببساطة نص
                                    شكلي (بمعنى أن الغاية هي الشكل وليس المحتوى) ويُستخدم في صناعات المطابع ودور النشر.
                                </p>
                            </div>
                        </div>
                    </div>
                    <!--/.Card-->
                </div>
                <div class="ml-2 mr-2">
                    <!--Card-->
                    <div class="text-right">
                        <div class="card card-channel bg-dark">
                            <!--Card image-->

                            <iframe class="card-channel-video " src="https://www.youtube.com/embed/c5Bi1AkrQyc"
                                frameborder="0"
                                allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                                allowfullscreen></iframe>
                            <!--Card content-->
                            <div class="card-body">
                                <!--Title-->
                                <h5 class="card-title">عنوان الفيديو</h5>
                                <!--Text-->
                                <p class="card-text">لوريم إيبسوم(Lorem Ipsum) لوريم إيبسوم(Lorem Ipsum) هو ببساطة نص
                                    شكلي (بمعنى أن الغاية هي الشكل وليس المحتوى) ويُستخدم في صناعات المطابع هو ببساطة نص
                                    شكلي (بمعنى أن الغاية هي الشكل وليس المحتوى) ويُستخدم في صناعات المطابع ودور النشر.
                                </p>
                            </div>
                        </div>
                    </div>
                    <!--/.Card-->
                </div>
            </div>
        </div>
    </div>
    <!-- End Channel **قنواتنا** -->
    <!-- ***************************************************************** -->
    <!-- Start Contact **تواصل معنا** -->
    <div class="contact">
        <div class="container-fluid mt-4">
            <h1 class="text-center font-bold mb-5">تواصل معنا</h1>
            <div class="row">
                <div class="col-md-6">
                    <form action="#" class="needs-validation" novalidate>
                        <div class="form-group">
                            <input type="text" class="form-control" id="name" placeholder="أدخل اسمك" name="name"
                                required>
                            <div class="valid-feedback">Valid.</div>
                            <div class="invalid-feedback">يرجى إدخال الاسم</div>
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control" id="email" placeholder="أدخل بريدك الالكتروني"
                                name="email" required>
                            <div class="valid-feedback">Valid.</div>
                            <div class="invalid-feedback">يرجى إدخال البريد الالكتروني</div>
                        </div>
                        <div class="form-group">
                            <textarea class="form-control" rows="5" id="message" name="message"
                                placeholder="اكتب رسالتك لنا ..."></textarea>
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn btn-light contact-btn text-center mb-4">إرسال</button>
                        </div>
                    </form>
                </div>
                <div class="col-md-6">
                    <div class="contact-icons mb-4">
                        <div class="row icon">
                            <i class="fa fa-whatsapp fa-2x" aria-hidden="true"></i>
                            <h5 class="">009058789652</h5>
                        </div>
                    </div>
                    <div class="contact-icons mb-4">
                        <div class="row icon">
                            <i class="fa fa-envelope fa-2x" aria-hidden="true"></i>
                            <h5 class="">super@hotmail.com</h5>
                        </div>
                    </div>
                    <div class="contact-icons mb-4">
                        <div class="row icon">
                            <i class="fa fa-map-marker fa-2x" aria-hidden="true"></i>
                            <h5 class="">تركيا - اسطنبول</h5>
                        </div>
                    </div>
                    <div class="social-icons mt-5">
                        <div class="row icon-social">
                            <a href=""><i class="fa fa-facebook fa-2x" aria-hidden="true"></i></a>
                            <a href=""><i class="fa fa-instagram fa-2x" aria-hidden="true"></i></a>
                            <a href=""><i class="fa fa-twitter fa-2x" aria-hidden="true"></i></a>
                            <a href=""><i class="fa fa-google-plus fa-2x" aria-hidden="true"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Contact **تواصل معنا** -->
    <!-- ***************************************************************** -->
    <!-- Start Footer-->
    <div class="footer">
        <div class="container-fluid">
            <div class="row">
                <div class="desc text-center">
                    <h5>برمجة وتطوير <span><i class="fa fa-heart-o" aria-hidden="true"></i></span>&nbsp; هوزن تك</h5>
                </div>
            </div>
        </div>
    </div>
    <!-- End Footer -->
    <!-- ***************************************************************** -->
    <script src="js/jquery-3.4.1.min.js"></script>
    <script src="js/jquery.nicescroll.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/owlcarousel/owl.carousel.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>

</body>

</html>