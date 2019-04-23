<?php

namespace App;
use App\Quartier;
use App\Ville;
use App\Structure;
use App\Hopital;
use App\Medecin;
use App\Vehicule;
use App\Ambulance;

use Illuminate\Database\Eloquent\Model;

class Itineraire extends Model
{
    //
    protected $fillable = ['quartier_id', 'ville_id', 'date'];


}
