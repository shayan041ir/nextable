<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\LoginController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\SendController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\RegisterController;

Route::get('/', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('/bosh', function () {
    return view('bosh');
});

Route::get('/dashboard',[DashboardController::class,'index'])->name('dashboard');

Route::get('/dashboard-two', function () {
    return view('dashboard-two');
})->name('dashboard-two');

Route::get('/dashboard-three', function () {
    return view('dashboard-three');
})->name('dashboard-three');

Route::get('/widgets', function () {
    return view('widgets');
})->name('widgets');

// Route::group(['prefix' => 'app'], function () {

//     Route::get('/chat', function () {
//         return view('chat');
//     })->name('app.chat');

//     Route::get('/inbox', function () {
//         return view('inbox');
//     })->name('app.inbox');

//     Route::get('/calendar', function () {
//         return view('calendar');
//     })->name('app.calendar');

//     Route::get('/gallery', function () {
//         return view('gallery');
//     })->name('app.gallery');
// });

// app
Route::get('/chat', function () {
    return view('chat');
})->name('chat');

Route::get('/inbox', function () {
    return view('inbox');
})->name('inbox');

Route::get('/calendar', function () {
    return view('calendar');
})->name('calendar');

Route::get('/gallery', function () {
    return view('gallery');
})->name('gallery');

// plugin

Route::get('/sweet_alert', function () {
    return view('sweet_alert');
})->name('sweet_alert');

Route::get('/lightbox', function () {
    return view('lightbox');
})->name('lightbox');

Route::get('/toast', function () {
    return view('toast');
})->name('toast');

Route::get('/tour', function () {
    return view('tour');
})->name('tour');

Route::get('/slick_slide', function () {
    return view('slick_slide');
})->name('slick_slide');

Route::get('/nestable', function () {
    return view('nestable');
})->name('nestable');

Route::get('/chart_apex', function () {
    return view('chart_apex');
})->name('chart_apex');

Route::get('/chartjs', function () {
    return view('chartjs');
})->name('chartjs');

Route::get('/chart_justgage', function () {
    return view('chart_justgage');
})->name('chart_justgage');

Route::get('/chart_morris', function () {
    return view('chart_morris');
})->name('chart_morris');

Route::get('/chart-peity', function () {
    return view('chart-peity');
})->name('chart-peity');

Route::get('/google_map', function () {
    return view('google_map');
})->name('google_map');

Route::get('/vector_map', function () {
    return view('vector_map');
})->name('vector_map');

// عناصر

Route::get('/alerts', function () {
    return view('alerts');
})->name('alerts');

Route::get('/badge', function () {
    return view('badge');
})->name('badge');

Route::get('/buttons', function () {
    return view('buttons');
})->name('buttons');

Route::get('/pagination', function () {
    return view('pagination');
})->name('pagination');

Route::get('/dropdown', function () {
    return view('dropdown');
})->name('dropdown');

Route::get('/accordion', function () {
    return view('accordion');
})->name('accordion');

Route::get('/carousel', function () {
    return view('carousel');
})->name('carousel');

Route::get('/typography', function () {
    return view('typography');
})->name('typography');

Route::get('/list_group', function () {
    return view('list_group');
})->name('list_group');

Route::get('/media_object', function () {
    return view('media_object');
})->name('media_object');

Route::get('/images', function () {
    return view('images');
})->name('images');

Route::get('/progress', function () {
    return view('progress');
})->name('progress');

Route::get('/modal', function () {
    return view('modal');
})->name('modal');

Route::get('/spinners', function () {
    return view('spinners');
})->name('spinners');

Route::get('/navs', function () {
    return view('navs');
})->name('navs');

Route::get('/tab', function () {
    return view('tab');
})->name('tab');

Route::get('/tooltip', function () {
    return view('tooltip');
})->name('tooltip');

Route::get('/popovers', function () {
    return view('popovers');
})->name('popovers');

//A forms

Route::get('/basic_form', function () {
    return view('basic_form');
})->name('basic_form');

Route::get('/custom_form', function () {
    return view('custom_form');
})->name('custom_form');

Route::get('/advanced_form', function () {
    return view('advanced_form');
})->name('advanced_form');

Route::get('/datepicker', function () {
    return view('datepicker');
})->name('datepicker');

Route::get('/timepicker', function () {
    return view('timepicker');
})->name('timepicker');

Route::get('/colorpicker', function () {
    return view('colorpicker');
})->name('colorpicker');

Route::get('/form-validation', function () {
    return view('form-validation');
})->name('form-validation');

Route::get('/form-wizard', function () {
    return view('form-wizard');
})->name('form-wizard');

Route::get('/file-upload', function () {
    return view('file-upload');
})->name('file-upload');

Route::get('/ckeditor-article', function () {
    return view('ckeditor-article');
})->name('ckeditor-article');

Route::get('/ckeditor-inline', function () {
    return view('ckeditor-inline');
})->name('ckeditor-inline');



// tables

Route::get('/tables', function () {
    return view('tables');
})->name('tables');

Route::get('/data-table', function () {
    return view('data-table');
})->name('data-table');

Route::get('/responsive-table', function () {
    return view('responsive-table');
})->name('responsive-table');


// کارت ها

Route::get('/basic-cards', function () {
    return view('basic-cards');
})->name('basic-cards');

Route::get('/image-cards', function () {
    return view('image-cards');
})->name('image-cards');

Route::get('/card-scroll', function () {
    return view('card-scroll');
})->name('card-scroll');

Route::get('/other-cards', function () {
    return view('other-cards');
})->name('other-cards');


//anasor edame

Route::get('/colors', function () {
    return view('colors');
})->name('colors');

Route::get('/avatar', function () {
    return view('avatar');
})->name('avatar');

Route::get('/icons', function () {
    return view('icons');
})->name('icons');



// safehat


Route::get('/profile', function () {
    return view('profile');
})->name('profile');

Route::get('/timeline', function () {
    return view('timeline');
})->name('timeline');

Route::get('/invoice', function () {
    return view('invoice');
})->name('invoice');

Route::get('/pricing-table', function () {
    return view('pricing-table');
})->name('pricing-table');

Route::get('/search-result', function () {
    return view('search-result');
})->name('search-result');




Route::get('/login',[LoginController::class,'index'])->name('login');
Route::post('/login',[LoginController::class,'verify'])->name('login.verify');


Route::get('/send',[SendController::class,'sendnum'])->name('send.sendnum');
Route::post('/send',[SendController::class,'OkCode'])->name('send.OkCode');



Route::get('/menu', [MenuController::class, 'index'])->name('menu.index');
Route::post('/menu/store', [MenuController::class, 'store'])->name('menu.store');
Route::get('/menu/edit/{id}', [MenuController::class, 'edit'])->name('menu.edit');
Route::post('/menu/update/{id}', [MenuController::class, 'update'])->name('menu.update');
Route::get('/menu/delete/{id}', [MenuController::class, 'destroy'])->name('menu.destroy');
Route::post('/menu/upload/{id}', [MenuController::class, 'uploadImage'])->name('menu.uploadImage');

Route::get('/register',[RegisterController::class,'index'])->name('register');
Route::post('/register',[RegisterController::class,'SN'])->name('register.SN');

Route::get('/recover-password', function () {
    return view('recover-password');
})->name('recover-password');

Route::get('/lock-screen', function () {
    return view('lock-screen');
})->name('lock-screen');




// قالب های ایمیل


Route::get('/email-template-basic', function () {
    return view('email-template-basic');
})->name('email-template-basic');

Route::get('/email-template-alert', function () {
    return view('email-template-alert');
})->name('email-template-alert');

Route::get('/email-template-billing', function () {
    return view('email-template-billing');
})->name('email-template-billing');



// khata ha


Route::get('/404', function () {
    return view('404');
})->name('404');

Route::get('/404-2', function () {
    return view('404-2');
})->name('404-2');

Route::get('/503', function () {
    return view('503');
})->name('503');

Route::get('/mean-at-work', function () {
    return view('mean-at-work');
})->name('mean-at-work');

Route::get('/blank-page', function () {
    return view('blank-page');
})->name('blank-page');

