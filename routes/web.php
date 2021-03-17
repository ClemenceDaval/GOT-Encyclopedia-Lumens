<?php

use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$router->get(
    '/',
    [
        'uses' => 'CharacterController@list', // nomdDuController@@NomDeLaMethode
        'as'   => 'character-list' // nom de la route
    ]
);

$router->get(
    '/characters/{id}',
    [
        'uses' => 'CharacterController@item', // nomdDuController@@NomDeLaMethode
        'as'   => 'character-item' // nom de la route
    ]
);

$router->get(
    '/titles',
    [
        'uses' => 'TitleController@list', // nomdDuController@@NomDeLaMethode
        'as'   => 'title-list' // nom de la route
    ]
);

$router->get(
    '/titles/{id}',
    [
        'uses' => 'TitleController@item', // nomdDuController@@NomDeLaMethode
        'as'   => 'title-item' // nom de la route
    ]
);

$router->get(
    '/houses',
    [
        'uses' => 'HouseController@list', // nomdDuController@@NomDeLaMethode
        'as'   => 'house-list' // nom de la route
    ]
);


