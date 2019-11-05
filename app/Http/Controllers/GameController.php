<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;

class GameController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function get_game_type()
    {
        $game_type = 'sport';

        return view('', compact('game_type'));
    }

    public function index()
    {
        $games = App\Game::get()->all();

        return view('games.index', compact('games'));
    }

    public function single($id)
    {
        $game = App\Game::find($id);
        return view('games.single', compact('game'));
    }

}
