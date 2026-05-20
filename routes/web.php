<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'pages.home')->name('home');
Route::view('/news', 'pages.news')->name('news');
Route::view('/error', 'errors.404')->name('error');
Route::view('/error2', 'errors.503')->name('error2');
Route::view('/contact', 'pages.contacts')->name('contact');
Route::view('/about', 'pages.about')->name('about');
Route::view('/post', 'pages.post')->name('post');
Route::view('/service', 'pages.service')->name('service');
Route::view('/services', 'pages.services')->name('services');
