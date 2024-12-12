<?php

namespace App\Http\Controllers;

use App\Models\Game;
use Illuminate\Http\Request;

class GameController extends Controller
{
    function games(){
        $games = Game::inRandomOrder()->take(4)->get();
        return view('website.games', compact('games'));
    }
    function games_slug($slug){
        $game = Game::where('slug' , $slug)->firstOrFail();
        return view('website.game-view', compact('game'));
    }
    function get_games(Request $request)
    {
        $offset = $request->input('offset', 0); // Starting index
        $limit = $request->input('limit', 12); // Number of items to fetch

        // Fetch games with offset and limit
        $games = Game::skip($offset)->take($limit)->get();

        return response()->json($games);
    }
}
