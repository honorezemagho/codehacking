<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hopital extends Model
{
    //
    protected $fillable = ['name', 'ville_id','quartier_id', 'email', 'phone', 'phone2', 'structure_id'];


    public function quartier(){

        return $this->belongsTo('App\Quartier');

    }

    public function ville(){

        return $this->belongsTo('App\Ville');

    }

    public function ambulance(){
        return $this->belongsTo('App\Ambulance');

    }

    public  function  structure(){

        return $this->belongsTo('App\Structure');
    }
}
