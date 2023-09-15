<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StaticPagesController;
use App\Http\Controllers\CatalogsController;
use App\Http\Controllers\LandingController;

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

Route::get('/', [LandingController::class, 'home']);

Route::get('/catalog', [CatalogsController::class, 'menu']);
Route::get('/catalog/{slug}', [CatalogsController::class, 'catalog'])->where('slug', '[A-z_-]+');
Route::get('/offer/{slug}', [CatalogsController::class, 'offer']);

Route::get('/map', [StaticPagesController::class, 'map']);
Route::get('/about_us', [StaticPagesController::class, 'about_us']);
Route::get('/delivery_and_payment', [StaticPagesController::class, 'delivery_and_payment']);
Route::get('/installation', [StaticPagesController::class, 'installation']);
Route::get('/warranty', [StaticPagesController::class, 'warranty']);
Route::get('/news', [StaticPagesController::class, 'news']);

Route::post('/submitted', [StaticPagesController::class, 'submitted']);
Route::post('/thank_you', [StaticPagesController::class, 'thank_you']);

