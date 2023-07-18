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
    $data =[

        "prodotti" => [
            "set-spiaggia" => 
            [
                "name" => "Set giochi Spiaggia",
                "prezzo" => "15.00",
                "img" => "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR0-rsxW5hx3TL8Ohk6a9MA_2WpxHSdXyutLQ&usqp=CAU"
            ],

            "telo-mare" => 
            [
                "name" => "Telo mare",
                "prezzo" => "25.00",
                "img" => "https://img.kwcdn.com/product/Fancyalgo/VirtualModelMatting/f41cfe2c7a0d06d6c155ca0acdbcf20e.jpg?imageView2/2/w/800/q/70"
            ],
            "creme-varie" => 
            [
                "name" => "Set giochi Spiaggia",
                "prezzo" => "30.00",
                "img" => "https://anigridi.altervista.org/wp-content/uploads/kit-cosmetici-da-spiaggia_crema-solare-960x600.jpg"
            ]
        ]
    ];

    return view("prodotti",$data);
})->name("prodotti");

Route::get('/filosofia', function () {

    return view("filosofia");
})->name("filosofia");
