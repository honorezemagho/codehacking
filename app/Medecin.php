<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Medecin extends Model
{
    //*
protected $fillable = ['name', 'quartier_id', 'phone'];

    public function quartier(){

        return $this->belongsTo('App\Quartier');

    }

    public function ville(){

        return $this->belongsTo('App\Ville');

    }

    public  function  structure(){

        return $this->belongsTo('App\Structure');
    }


}
