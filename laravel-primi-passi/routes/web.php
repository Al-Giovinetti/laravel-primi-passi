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

Route::get('/home', function () {
    $data = [

       "menu" => [
        [
            "pageTitle" => "Home",
            "pageIcon" => "A",
            "linkName" =>"home"
        ],
        [
            "pageTitle" => "Prodotti",
            "pageIcon" => "B",
            "linkName" =>"prodotti"
        ],
        [
            "pageTitle" => "Filosofia",
            "pageIcon" => "C",
            "linkName" =>"filosofia"

        ]
       ]
    ];

    return view("home", $data);
})->name("home");


Route::get('/prodotti', function () {

    return view("prodotti");
})->name("prodotti");

Route::get('/filosofia', function () {

    return view("filosofia");
})->name("filosofia");
