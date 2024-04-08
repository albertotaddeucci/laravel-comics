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

    $comics = config("db");

    $navLinks = [
        "Characters",
        "Comics",
        "Movies",
        "Tv",
        "Games",
        "Collectibels",
        "Videos",
        "Fans",
        "News",
        "Shop",
    ];

    $cards = [
        [
            'image' => '/img/buy-comics-digital-comics.png',
            'text' => 'Digital Comics',
        ],
        [
            'image' => '/img/buy-comics-merchandise.png',
            'text' => 'DC Merchandise',
        ],
        [
            'image' => '/img/buy-comics-subscriptions.png',
            'text' => 'Subscription',
        ],
        [
            'image' => '/img/buy-comics-shop-locator.png',
            'text' => 'Comic Shop Locator',
        ],
        [
            'image' => '/img/buy-dc-power-visa.svg',
            'text' => 'DC Power Visa',
        ],
    ];

    $lists = [
        [
            "title" => "Dc comics",
            "links" => ["Characters", "Comics", "Movies", "Tv", "Games", "Videos", "News"]
        ],
        [
            "title" => "Shop",
            "links" => ["Shop DC", "Shop DC Collection"]
        ],
        [
            "title" => "Dc",
            "links" => [
                "Terms Of Use", "Privacy Policy (New)",
                "Ad Choices", "Advertising", "Jobs", "Subscriptions",
                "Talent Workshops", "CPSC Certificates",
                "Raitings", "Shop Help", "Contact Us"
            ]
        ],
        [
            "title" => "Sites",
            "links" => ["DC", "MAD Magazine", "DC Kinds", "DC Universe", "DC Power Visa"]
        ],
    ];





    // dd($comics);


    return view('home', compact('comics', 'navLinks', 'cards', 'lists'));
})->name('home');
