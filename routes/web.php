<?php

use App\Http\Controllers\adminController;
use App\Http\Controllers\WebController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('index', [WebController::class, 'index'])->name('web.index');
Route::get('about', [WebController::class, 'about'])->name('web.about');
Route::any('contact', [WebController::class, 'contact'])->name('web.contactus');
Route::get('blocklist', [WebController::class, 'blocklist'])->name('web.blocklist');
Route::get('blogdeatils', [WebController::class, 'blogdeatils'])->name('web.blogdeatils');
Route::group(['prefix' => 'my-admin'], function () {
    Route::get('index', [adminController::class, 'index'])->name('admin.index');
    Route::get('form', [adminController::class, 'form'])->name('admin.form');
    Route::get('contactus', [adminController::class, 'contactus'])->name('view.contactus');
    Route::post('viewcontact', [adminController::class, 'contactusform'])->name('submit.contactus');
 });