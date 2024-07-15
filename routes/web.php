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

    $dcComicsList = [
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
            "title" => "Videos",
            "active" => false
        ],
        [
            "id" => 7,
            "title" => "News",
            "active" => false
        ],
    ];

    $shopList = [
        [
            "id" => 1,
            "title" => "Shop DC",
            "active" => false
        ],
        [
            "id" => 2,
            "title" => "Shop DC Collectibles",
            "active" => false
        ],
    ];

    $dcList = [
        [
            "id" => 1,
            "title" => "Terms Of Use",
            "active" => false
        ],
        [
            "id" => 2,
            "title" => "Privacy Policy (New)",
            "active" => true
        ],
        [
            "id" => 3,
            "title" => "Ad Choices",
            "active" => false
        ],
        [
            "id" => 4,
            "title" => "Advertising",
            "active" => false
        ],
        [
            "id" => 5,
            "title" => "Jobs",
            "active" => false
        ],
        [
            "id" => 6,
            "title" => "Subscriptions",
            "active" => false
        ],
        [
            "id" => 7,
            "title" => "Talent Workshops",
            "active" => false
        ],
        [
            "id" => 8,
            "title" => "CPSC Certificates",
            "active" => false
        ],
        [
            "id" => 9,
            "title" => "Ratings",
            "active" => false
        ],
        [
            "id" => 10,
            "title" => "Shop Help",
            "active" => false
        ],
        [
            "id" => 11,
            "title" => "Contact Us",
            "active" => false
        ],
    ];

    $siteList = [
        [
            "id" => 1,
            "title" => "DC",
            "active" => false
        ],
        [
            "id" => 2,
            "title" => "MAD Magazines",
            "active" => false
        ],
        [
            "id" => 3,
            "title" => "DC Kids",
            "active" => false
        ],
        [
            "id" => 4,
            "title" => "DC Universe",
            "active" => false
        ],
        [
            "id" => 5,
            "title" => "DC Power Visa",
            "active" => false
        ],
    ];

    $socialList = [
        [
            "id" => 1,
            "name" => "Facebook",
            "icon" => "footer-facebook.png"
        ],
        [
            "id" => 2,
            "name" => "Twitter",
            "icon" => "footer-twitter.png"
        ],
        [
            "id" => 3,
            "name" => "YouTube",
            "icon" => "footer-youtube.png"
        ],
        [
            "id" => 4,
            "name" => "Pinterest",
            "icon" => "footer-pinterest.png"
        ],
        [
            "id" => 5,
            "name" => "Periscope",
            "icon" => "footer-periscope.png"
        ],
    ];

    return view(
        'pages.home',
        compact(
            "navbarLinks",
            "dcComicsList",
            "shopList",
            "dcList",
            "siteList",
            "socialList")
    );
});
