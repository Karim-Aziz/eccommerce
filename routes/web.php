<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|Route::get('/config', function () {
    $exitCode = Artisan::call('config:cache');
    return 'config ok';
});

*/

Route::group([  'prefix'=>'/contact'], function () {
    Route::get('/', 'contactControlle@index');
    Route::post('/insert', 'contactControlle@insert');
});
Route::group([  'prefix'=>'/favorite'], function () {
    Route::get('/', 'FavoriteController@index');
    Route::post('/add/{id}', 'FavoriteController@add');
    Route::post('/remove/{id}', 'FavoriteController@remove');
});
Route::group([  'prefix'=>'/cart'], function () {
    Route::get('/', 'CartController@index');
    Route::post('/add/{id}', 'CartController@add');
    Route::post('/remove/{id}', 'CartController@remove');
    Route::post('/plus/{id}', 'CartController@plus');
    Route::post('/total/{id}', 'CartController@total');
    Route::post('/amount', 'CartController@amount');
});

Route::group([  'prefix'=>'/pages'], function () {
    Route::get('/', 'pagesController@index');
    Route::get('/search', 'pagesController@search');
    Route::get('/{id}', 'pagesController@show');
    Route::get('/place/{id}', 'pagesController@place');
});


Route::get('/Portfolio', 'pagesController@index');
Route::post('/requests/{id}', 'pagesController@requests');
Route::get('/our_team', 'ourTeamController@index');
Route::get('/services', 'servicesController@index');
Route::get('/about_us', 'AboutAsController@index');
Route::get('/my_acount', 'HomeController@acount');
Route::post('/user/edit/{id}', 'HomeController@editAcount');


Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home')->middleware('auth');
Route::group(['prefix' => '/siteAdmin'], function () {
    Route::get('/', 'siteAdmin\AdminController@index');
    Route::get('/login', 'Auth\LoginController@loginAdmin');
    Route::group([  'prefix'=>'/user'],function(){
        Route::get('/show', 'siteAdmin\UserController@index');
        Route::get('/add', 'siteAdmin\UserController@add');
        Route::post('/insert', 'siteAdmin\UserController@insert');
        Route::get('/delete/{id}', 'siteAdmin\UserController@delete');
        Route::post('/edit/{id}', 'siteAdmin\UserController@edit');
    });

    Route::group([  'prefix'=>'/home_desc'],function(){
        Route::get('/show', 'siteAdmin\HomeDescController@index');
        Route::post('/edit/{id}', 'siteAdmin\HomeDescController@edit');
    });
    Route::group([  'prefix'=>'/slider'],function(){
        Route::get('/show', 'siteAdmin\SliderController@index');
        Route::get('/add', 'siteAdmin\SliderController@add');
        Route::post('/insert', 'siteAdmin\SliderController@insert');
        Route::post('/edit/{id}', 'siteAdmin\SliderController@edit');
    });
    Route::group([  'prefix'=>'/brand'],function(){
        Route::get('/show', 'siteAdmin\BrandController@index');
        Route::get('/add', 'siteAdmin\BrandController@add');
        Route::post('/insert', 'siteAdmin\BrandController@insert');
        Route::post('/edit/{id}', 'siteAdmin\BrandController@edit');
    });
    Route::group([  'prefix'=>'/services'],function(){
        Route::get('/show', 'siteAdmin\ServicesController@index');
        Route::get('/add', 'siteAdmin\ServicesController@add');
        Route::post('/insert', 'siteAdmin\ServicesController@insert');
        Route::post('/edit/{id}', 'siteAdmin\ServicesController@edit');
    });
    Route::group([  'prefix'=>'/about_us'],function(){
        Route::get('/show', 'siteAdmin\AboutAsController@index');
        Route::post('/edit/{id}', 'siteAdmin\AboutAsController@edit');
    });
    Route::group([  'prefix'=>'/pages'],function(){
        Route::get('/show', 'siteAdmin\pagesController@index');
        Route::get('/add', 'siteAdmin\pagesController@add');
        Route::post('/insert', 'siteAdmin\pagesController@insert');
        Route::get('/delete/{id}', 'siteAdmin\pagesController@delete');
        Route::post('/edit/{id}', 'siteAdmin\pagesController@edit');
    });
    Route::group([  'prefix'=>'/Clinic'],function(){
        Route::get('/show', 'siteAdmin\ClinicController@index');
        Route::get('/add', 'siteAdmin\ClinicController@add');
        Route::post('/insert', 'siteAdmin\ClinicController@insert');
        Route::get('/delete/{id}', 'siteAdmin\ClinicController@delete');
        Route::post('/edit/{id}', 'siteAdmin\ClinicController@edit');
    });
    Route::group([  'prefix'=>'/Video'],function(){
        Route::get('/show', 'siteAdmin\VideoController@index');
        Route::get('/add', 'siteAdmin\VideoController@add');
        Route::post('/insert', 'siteAdmin\VideoController@insert');
        Route::get('/delete/{id}', 'siteAdmin\VideoController@delete');
        Route::post('/edit/{id}', 'siteAdmin\VideoController@edit');
    });
    Route::group([  'prefix'=>'/Testimonial'],function(){
        Route::get('/show', 'siteAdmin\TestimonialController@index');
        Route::get('/add', 'siteAdmin\TestimonialController@add');
        Route::post('/insert', 'siteAdmin\TestimonialController@insert');
        Route::get('/delete/{id}', 'siteAdmin\TestimonialController@delete');
        Route::post('/edit/{id}', 'siteAdmin\TestimonialController@edit');
    });
    Route::group([  'prefix'=>'/places'],function(){
        Route::get('/show', 'siteAdmin\placesController@index');
        Route::get('/add', 'siteAdmin\placesController@add');
        Route::post('/insert', 'siteAdmin\placesController@insert');
        Route::get('/delete/{id}', 'siteAdmin\placesController@delete');
        Route::post('/edit/{id}', 'siteAdmin\placesController@edit');
    });

    Route::group([  'prefix'=>'/settings'],function(){
        Route::get('/', 'siteAdmin\settingsController@index');
        Route::post('/edit', 'siteAdmin\settingsController@edit');
    });
    Route::group([  'prefix'=>'/our_team'],function(){
        Route::get('/show', 'siteAdmin\OurTeamController@index');
        Route::get('/add', 'siteAdmin\OurTeamController@add');
        Route::post('/insert', 'siteAdmin\OurTeamController@insert');
        Route::get('/delete/{id}', 'siteAdmin\OurTeamController@delete');
        Route::post('/edit/{id}', 'siteAdmin\OurTeamController@edit');
    });
    Route::group([  'prefix'=>'/contact'],function(){
        Route::get('/', 'siteAdmin\contactController@index');
        Route::get('/delete/{id}', 'siteAdmin\contactController@delete');
    });
    Route::group([  'prefix'=>'/requests'],function(){
        Route::get('/', 'siteAdmin\requestsController@index');
        Route::get('/delete/{id}', 'siteAdmin\requestsController@delete');
    });
});

Route::get('/', function () {
    if (Session::get('app_locale') == 'ar') {
        $home_desc = App\home_desc::select('desc_ar AS description')->first();
        App::setLocale('ar');
    } else {
        $home_desc = App\home_desc::select('desc AS description')->first();
        App::setLocale('en');
        Session::put(App::setLocale('en'));
    }
    return view('welcome.index', compact(['home_desc']));
});

Route::get('/{locale}', function ($locale) {
    if ($locale == 'ar' or $locale == 'en') {
        if ($locale === 'ar' ) {
            App::setLocale($locale);
            Session::put('app_locale', $locale);
        }else {
            App::setLocale('en');
            Session::put('app_locale', 'en');
        }
        return redirect()->back();
    }
    return view('errors.404');
});
