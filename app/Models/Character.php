<?php

namespace App\Models;

// on importe le coreCodel de lumen
use Illuminate\Database\Eloquent\Model;

class Character extends Model {

    /** The table associated with the model
     *
     *
     */

    protected $table = 'character' ;

    public function title(){
        return $this->belongsTo('App\Models\Title', 'id_title');
    }

    public function mother(){
        return $this->belongsTo('App\Models\Character', 'mother_id');
    }

    public function father(){
        return $this->belongsTo('App\Models\Character', 'father_id');
    }





}
