<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    $navbarLinks = [
        [
            "id" => 1,
            "title" => "Characters",
            "active" => false
        ],
        [
            "id" => 2,
            "title" => "Comics",
            "active" => true
        ],
        [
            "id" => 3,
            "title" => "Movies",
            "active" => false
        ],
        [
            "id" => 4,
            "title" => "Tv",
            "active" => false
        ],
        [
            "id" => 5,
            "title" => "Games",
            "active" => false
        ],
        [
            "id" => 6,
            "title" => "Collectibles",
            "active" => false
        ],
        [
            "id" => 7,
            "title" => "Videos",
            "active" => false
        ],
        [
            "id" => 8,
            "title" => "Fans",
            "active" => false
        ],
        [
            "id" => 9,
            "title" => "News",
            "active" => false
        ],
        [
            "id" => 10,
            "title" => "Shop",
            "active" => false
        ],
    ];

    return view('pages.home', compact($navbarLinks));
});
