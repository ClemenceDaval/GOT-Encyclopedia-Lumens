<?php

namespace App\Http\Controllers;

use DB;
use App\Models\Character;

class MainController extends Controller
{
    public function home()
    {
        $charactersList = Character::all();

        return view('main/home', ['characters' => $charactersList]);

    }

}
