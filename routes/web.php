<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdditionalPages;
use App\Models\Type;

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
    return view('home');
});

Route::get('/about_us', function () {
    return view('about_us');
});

Route::get('/catalog', function () {
    $types = Type::get_all('wraps');
    return view('catalog_menu', ['all_types' => $types]);
});

Route::get('/catalog/{type}', function ($type) {
    $offers = Type::get_all($type);
    $type_name = Type::translate($type);
    return view('catalog', ['type_name' => $type_name, 'offers' => $offers]);
})->where('type', '[A-z_-]+');


Route::get('/map', [AdditionalPages::class, 'map']);
Route::post('/submitted', [AdditionalPages::class, 'submitted']);
