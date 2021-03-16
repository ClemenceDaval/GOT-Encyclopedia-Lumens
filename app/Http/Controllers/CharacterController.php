<?php

namespace App\Http\Controllers;

use DB;
use App\Models\Character;
use App\Models\Title;
use Illuminate\Support\Facades\View;


class CharacterController extends Controller
{
    public function list()
    {
        $charactersList = Character::all();

        return view('character/list', ['characters' => $charactersList]);

    }

    public function item($id)
    {
        $characterId= intval($id);
        $character = Character::find($characterId);
        //$titles = Title::all();

        //return $this->sendJsonResponse($character, 200);
        return View::make('character/item', ['character' => $character]);

    }

}
