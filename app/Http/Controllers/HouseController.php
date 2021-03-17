<?php

namespace App\Http\Controllers;

use DB;
use App\Models\House;
use Illuminate\Support\Facades\View;


class HouseController extends Controller
{
    public function list()
    {
        $housesList = House::all();

        return view('house/list', ['houses' => $housesList]);

    }



    // public function item($id)
    // {
    //     $characterId= intval($id);
    //     $character = Character::find($characterId);
    //     //$titles = Title::all();

    //     //return $this->sendJsonResponse($character, 200);
    //     return View::make('character/item', ['character' => $character]);

    // }

}
