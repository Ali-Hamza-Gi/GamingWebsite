<?php

namespace App\Http\Controllers;

use App\Models\Game;
use Illuminate\Http\Request;

class GameController extends Controller
{
    function games(){
        return view('website.games');
    }
    function get_games(Request $request)
    {
        $offset = $request->input('offset', 0); // Starting index
        $limit = $request->input('limit', 8); // Number of items to fetch

        // Fetch games with offset and limit
        $games = Game::skip($offset)->take($limit)->get();

        return response()->json($games);
    }
}
