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

    public function item($id)
    {
        $houseId= intval($id);
        $house = House::find($houseId);

        return View::make('house/item', ['house' => $house]);

    }

}
