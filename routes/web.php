<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::get('/dashboard-two', function () {
    return view('dashboard-two');
})->name('dashboard-two');

Route::get('/dashboard-three', function () {
    return view('dashboard-three');
})->name('dashboard-three');

Route::get('/widgets', function () {
    return view('widgets');
})->name('widgets');

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

