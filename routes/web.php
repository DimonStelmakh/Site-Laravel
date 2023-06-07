<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StaticPagesController;
use App\Models\Type;
use App\Models\Special;
use App\Models\Offer;

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
    $popular_offers = Special::find(1)->offers->all(); // всі Offers які popular
    $popular_offers_ids = [];
    foreach ($popular_offers as $offer) {
        $popular_offers_ids[] = $offer->id;
    }
    $discounted_offers = Special::find(2)->offers->all(); // всі Offers які discounted

    return view('home', [
        'popular_offers' => $popular_offers,
        'popular_offers_ids' => $popular_offers_ids,
        'discounted_offers' => $discounted_offers
    ]);
});

Route::get('/about_us', function () {
    return view('about_us');
});

Route::get('/catalog', function () {
    $types = Type::all();
    return view('catalog_menu', ['all_types' => $types]);
});

Route::get('/catalog/{slug}', function ($slug) {
    $popular_offers = Special::find(1)->offers->all();
    $popular_offers_ids = [];
    foreach ($popular_offers as $offer) {
        $popular_offers_ids[] = $offer->id;
    }
    if (in_array("$slug", ['popular', 'discounted'])) {
        if ($slug == 'popular') {
            $special_id = 1;
        }
        else {
            $special_id = 2;
        }
        $special = Special::find($special_id);
        return view('specials', [
            'special' => $special,
            'special_offers' => $special->offers,
            'test' => $special_id,
            'popular_offers_ids' => $popular_offers_ids
        ]);
    }
    else {
        $type = Type::where('eng_code', $slug)->first(); // один інстанс класу Type
        return view('catalog', ['type' => $type, 'popular_offers_ids' => $popular_offers_ids]);
    }

})->where('type', '[A-z_-]+');


Route::get('/map', [StaticPagesController::class, 'map']);
Route::post('/submitted', [StaticPagesController::class, 'submitted']);
