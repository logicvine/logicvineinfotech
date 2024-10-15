<?php

use App\Http\Controllers\adminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ContactUsController;
use App\Http\Controllers\WebController;
use Illuminate\Support\Facades\Route;

Route::get('/', [WebController::class, 'index'])->name('web.index');
Route::get('about', [WebController::class, 'about'])->name('web.about');
Route::any('contact', [WebController::class, 'contact'])->name('web.contactus');
Route::get('bloglist', [WebController::class, 'bloglist'])->name('web.bloglist');
Route::get('blogdeatils', [WebController::class, 'blogdeatils'])->name('web.blogdeatils');
Route::post('viewcontact', [adminController::class, 'submitcontactus'])->name('submit.contactus');

        //   admin  //

Route::group(['prefix' => 'my-admin', 'middleware' => 'auth'], function () {
    
    Route::get('index', [adminController::class, 'index'])->name('dashboard');
    Route::get('form', [adminController::class, 'form'])->name('admin.form');
    Route::get('contactus', [adminController::class, 'contactus'])->name('view.contactus');
    Route::get('logout', [AuthController::class, 'logout'])->name('logout');

    // admin . blog   . BlogController//

    Route::get('view', [BlogController::class, 'viewblog'])->name('show.blog');
    Route::any('create', [BlogController::class, 'adminblogpage'])->name('submit.blog');

});
 
Route::any('/blog/{id}', [BlogController::class, 'blogdetial'])->name('blog.detail');
Route::any('service/webdevelopment', [ContactUsController::class, 'webdevelopment'])->name('service.webdevelopment');
Route::any('service/mobileappdevelopment', [ContactUsController::class, 'mobileappdevelopment'])->name('service.mobileappdevelopment');
Route::any('service/softwaredevelopment', [ContactUsController::class, 'softwaredevelopment'])->name('service.softwaredevelopment');
Route::any('service/ecommerce', [ContactUsController::class, 'ecommerce'])->name('service.ecommerce');

Route::post('/blog/update/{id}', [BlogController::class, 'update'])->name('admin.blog.update');
Route::delete('/blog/delete/{id}', [BlogController::class, 'destroy'])->name('admin.blog.delete');
Route::get('/blog/edit/{id}', [BlogController::class, 'edit'])->name('admin.blog.edit');



Route::group(['prefix' => 'my-admin', 'middleware' => 'guest'], function () {
    Route::get('login', [AuthController::class, 'showLoginForm'])->name('login');
    Route::post('post-login', [AuthController::class, 'login'])->name('login.save');
});

