<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Special;

class LandingController extends Controller
{
    public function home() {
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
    }
}
