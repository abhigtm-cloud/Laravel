<?php

use Illuminate\Support\Facades\Route;

//route for the home page
Route::get('/home', function () {
    return view('welcome');
});

//route for the about us page
Route::get('/about', function () {
    return view('about.about',["name"=>"Abhinav"]);
});

//sample route for $slot and x-layout functionality check
Route::get('/smp', function () {
    return view('samplelayout',["name"=>"Abhinav"]);
});
