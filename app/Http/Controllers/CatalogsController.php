<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Special;
use App\Models\Type;

class CatalogsController extends Controller
{
    public function catalog($slug)
    {
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
    }

    public function menu() {
        $types = Type::all();
        return view('catalog_menu', ['all_types' => $types]);
    }
}
