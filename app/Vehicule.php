<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vehicule extends Model
{
    //
    protected  $fillable = ['name', 'user_id', 'ville_id', 'quartier_id'];

    public function quartier(){

        return $this->belongsTo('App\Quartier');

    }

    public function ville(){

        return $this->belongsTo('App\Ville');

    }

    public function user(){

        return $this->belongsTo('App\User');

        }

}
