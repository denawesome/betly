<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;

class GamesController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $games = App\Games::get()->all();

        return view('games.index', compact('games'));
    }

    public function single($id)
    {
        $game = App\Games::find($id);
        // dd($game);
        return view('games.single', compact('game'));
    }

}
