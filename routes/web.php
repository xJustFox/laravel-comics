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

Route::get('/', function () {
    $data = [
        'blueBar' => [
            [
                'icon' => 'resources/img/buy-comics-digital-comics.png',
                'title' => 'DIGITAL COMICS',
            ],
            [
                'icon' => 'resources/img/buy-comics-merchandise.png',
                'title' => 'DC MERCHANDISE',
            ],
            [
                'icon' => 'resources/img/buy-comics-subscriptions.png',
                'title' => 'SUBSCRIPTIONS',
            ],
            [
                'icon' => 'resources/img/buy-comics-shop-locator.png',
                'title' => 'COMIC SHOP LOCATOR',
            ],
            [
                'icon' => 'resources/img/buy-dc-power-visa.svg',
                'title' => 'DC POWER VISA',
            ]
        ]
    ];
    return view('comics', $data);
});
