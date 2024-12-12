<?php

namespace App\Http\Controllers;

use App\Models\Game;
use Illuminate\Http\Request;

class HomePageController extends Controller
{
    function index(Request $request)
    {

        $games = Game::get();

        $sliderGames = $games->random(5);
        $latestGames = $games->take(10);
        $otherGames = $games->skip(10)->random(24);

        return view('website.home', compact('sliderGames', 'latestGames', 'otherGames'));
    }
    function about_us(Request $request)
    {

        return view('website.about');
    }
}
