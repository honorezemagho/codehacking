<?php

namespace App\Http\Controllers;

use App\Http\Requests\VehiculeCreateRequest;
use App\Quartier;
use App\User;
use App\Vehicule;
use App\Ville;
use Illuminate\Http\Request;

use App\Http\Requests;

class AdminVehiculesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $vehicules = Vehicule::all();
        return view('admin.vehicules.index', compact('vehicules'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $quartiers = Quartier::pluck('name', 'id')->all();
        $villes = Ville::pluck('name', 'id')->all();
        $user = User::pluck('name', 'id')->all();
        return view('admin.vehicules.create', compact('quartiers', 'villes', 'user'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(VehiculeCreateRequest $request)
    {
        //
        $input = $request->all();

        Vehicule::create($input);

        return redirect('admin/vehicule');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        return view('admin.vehicules.edit');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
