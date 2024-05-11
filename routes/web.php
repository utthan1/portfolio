<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [App\Http\Controllers\FrontendController::class, 'index'])->name('welcome');
Route::get('/about-us', [App\Http\Controllers\FrontendController::class, 'about_index'])->name('about');

Route::get('/news/{id}/{title}', [App\Http\Controllers\FrontendController::class, 'news_details'])->name('news');
Route::get('/image-gallery/{id}/{title}', [App\Http\Controllers\FrontendController::class, 'image_gallery_details'])->name('image_gallery_details');

Route::get('/event-details/{id}/{title}', [App\Http\Controllers\FrontendController::class, 'event_details'])->name('event_details');


Route::get('/news', [App\Http\Controllers\FrontendController::class, 'news_index'])->name('news_page');

Route::get('/gallery', [App\Http\Controllers\FrontendController::class, 'gallery_index'])->name('gallery');
Route::get('/video-gallery', [App\Http\Controllers\FrontendController::class, 'video_gallery_index'])->name('video_gallery');
Route::get('/video-gallery-details/{id}/{title}', [App\Http\Controllers\FrontendController::class, 'video_gallery_detail'])->name('video_gallery_detail');



Route::get('/contact-us', function () {
    return view('frontend.contact');
})->name('contact');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware('auth')->group(function () {
    Route::get('admin/about-setting' , [App\Http\Controllers\AboutController::class , 'index'])->name('about-setting');
    Route::post('admin/about-setting' , [App\Http\Controllers\AboutController::class , 'store'])->name('about-setting');
    Route::get('admin/app-setting' , [App\Http\Controllers\AppSettingController::class , 'index'])->name('app-setting');
    Route::post('admin/app-setting' , [App\Http\Controllers\AppSettingController::class , 'store'])->name('app-setting');

    Route::get('admin/journey-setting' , [App\Http\Controllers\MainController::class , 'journey_index'])->name('journey-setting');
    Route::post('admin/journey-setting' , [App\Http\Controllers\MainController::class , 'journey_create'])->name('journey-setting');
    Route::get('admin/journey-delete-setting/{id}' , [App\Http\Controllers\MainController::class , 'journey_delete'])->name('delete-journey');
    Route::post('admin/journey-update-setting' , [App\Http\Controllers\MainController::class , 'journey_update'])->name('update-journey');


    Route::get('admin/stalwart-setting' , [App\Http\Controllers\MainController::class , 'stalwart_index'])->name('stalwart-setting');
    Route::post('admin/stalwart-setting' , [App\Http\Controllers\MainController::class , 'stalwart_create'])->name('stalwart-setting');
    Route::get('admin/stalwart-delete-setting/{id}' , [App\Http\Controllers\MainController::class , 'stalwart_delete'])->name('delete-stalwart');
    Route::post('admin/stalwart-update-setting' , [App\Http\Controllers\MainController::class , 'stalwart_update'])->name('update-stalwart');

    Route::get('admin/banner-setting' , [App\Http\Controllers\MainController::class , 'banner_index'])->name('banner-setting');
    Route::post('admin/banner-setting' , [App\Http\Controllers\MainController::class , 'banner_create'])->name('banner-setting');
    Route::post('admin/banner-update-setting' , [App\Http\Controllers\MainController::class , 'banner_update'])->name('banner-update');
    Route::get('admin/event-banner-setting/{id}' , [App\Http\Controllers\MainController::class , 'banner_delete'])->name('banner-delete');




    Route::get('admin/blog-setting' , [App\Http\Controllers\MainController::class , 'blog_index'])->name('blog-setting');
    Route::post('admin/blog-setting' , [App\Http\Controllers\MainController::class , 'blog_create'])->name('blog-setting');
    Route::post('admin/blog-update-setting' , [App\Http\Controllers\MainController::class , 'blog_update'])->name('blog-update');
    Route::get('admin/blog-delete-setting/{id}' , [App\Http\Controllers\MainController::class , 'blog_delete'])->name('blog-delete');

    Route::get('admin/event-setting' , [App\Http\Controllers\MainController::class , 'event_index'])->name('event-setting');
    Route::post('admin/event-setting' , [App\Http\Controllers\MainController::class , 'event_create'])->name('event-setting');
    Route::post('admin/event-update-setting' , [App\Http\Controllers\MainController::class , 'event_update'])->name('event-update');
    Route::get('admin/event-delete-setting/{id}' , [App\Http\Controllers\MainController::class , 'event_delete'])->name('event-delete');

    
    Route::get('admin/gallery-setting' , [App\Http\Controllers\MainController::class , 'gallery_index'])->name('gallery-setting');
    Route::post('admin/gallery-setting' , [App\Http\Controllers\MainController::class , 'gallery_create'])->name('gallery-setting');
    Route::post('admin/gallery-update-setting' , [App\Http\Controllers\MainController::class , 'gallery_update'])->name('gallery-update');
    Route::get('admin/event-gallery-setting/{id}' , [App\Http\Controllers\MainController::class , 'gallery_delete'])->name('gallery-delete');

    Route::get('admin/image-setting' , [App\Http\Controllers\MainController::class , 'image_index'])->name('image-gallery-setting');
    Route::post('admin/image-setting' , [App\Http\Controllers\MainController::class , 'image_create'])->name('image-gallery-setting');
    Route::post('admin/image-update-setting' , [App\Http\Controllers\MainController::class , 'image_update'])->name('image-gallery-update');
    Route::get('admin/image-setting/{id}' , [App\Http\Controllers\MainController::class , 'image_delete'])->name('image-gallery-delete');




});

