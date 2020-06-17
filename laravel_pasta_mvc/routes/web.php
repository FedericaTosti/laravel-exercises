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
    return view('welcome');
});

// Route::get('/home', function () {
//
//   $cards = config("pasta");
//
//   $collection = collect($cards) -> map(function($item, $key) {
//     $item["id"] = $key;
//     return $item;
//   });
//
//   $lunga = $collection -> where ("tipo", "lunga");
//   $corta = $collection -> where ("tipo", "corta");
//   $cortissima = $collection -> where ("tipo", "cortissima");
//
//
//   // collection sostituisce il foreach e l'if
//   // $lunga = [];
//   //
//   // foreach ($cards as $card) {
//   //   if ($card["tipo"] === "lunga") {
//   //     $lunga[] = $card;
//   //   }
//   //   if ($card["tipo"] === "corta") {
//   //     $corta[] = $card;
//   //   }
//   //   if ($card["tipo"] === "cortissima") {
//   //     $cortissima[] = $card;
//   //   }
//   // }
//
//   return view('home', compact("lunga","corta","cortissima"));
// })->name("home");

Route::get('/showPasta', 'PastaController@index')->name("home");

Route::get('/showPasta/{id}', 'PastaController@showPasta')->name("showPasta");

Route::get('/about', function () {
    return view('about');
})->name("about");

Route::get('/contacts', function () {
    return view('contacts');
})->name("contacts");
