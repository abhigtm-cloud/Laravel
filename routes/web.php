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

Route::get("/cousins",function(){
$teas = [
   ["name"=>"Pankaj Gautam" ,"Age"=>38,"id"=>1 , "SocialMedia"=>"https://www.linkedin.com/in/pankaj-gautam-765973114/"],
   ["name"=>"Suraj Gautam" ,"Age"=>28,"id"=>2,"SocialMedia"=>"chotu"],
   ["name"=>"Karan Gautam" ,"Age"=>20,"id"=>3, "SocialMedia"=>"chittu"],
   ["name"=>"Abhinav Gautam" ,"Age"=>19,"id"=>4 , "SocialMedia"=>"abhi"],
    ];
    return view("cousins.index",["cousins"=>$teas]);
});