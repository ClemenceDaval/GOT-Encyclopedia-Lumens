<?php

namespace App\Models;

// on importe le coreCodel de lumen
use Illuminate\Database\Eloquent\Model;

class House extends Model {

    /** The table associated with the model
     *
     *
     */

    protected $table = 'house' ;

    public function character(){
        return $this->belongsToMany(Character::class, 'house_has_characters', 'house', 'character');
    }

}
