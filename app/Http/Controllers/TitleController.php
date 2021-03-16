<?php

namespace App\Http\Controllers;

use DB;
use App\Models\Character;
use App\Models\Title;
use Illuminate\Support\Facades\View;


class TitleController extends Controller
{
    public function list()
    {
        $titlesList = Title::all();

        return view('title/list', ['titles' => $titlesList]);

    }

    public function item($id)
    {
        $titleId= intval($id);
        $title = Title::find($titleId)->load('character');
        //$titles = Title::all();

        //return $this->sendJsonResponse($character, 200);
        return View::make('title/item', ['title' => $title ]);

    }

}
