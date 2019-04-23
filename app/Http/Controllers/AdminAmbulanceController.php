<?php

namespace App\Http\Controllers;

use App\Ambulance;
use App\Hopital;
use Illuminate\Http\Request;
use App\Http\Requests\AmbulanceCreateRequest;

use App\Http\Requests;
use App\Ville;
use App\Quartier;
use App\Structure;

class AdminAmbulanceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $ambulances = Ambulance::all();

        return view('admin.ambulance.index', compact('ambulances'));
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
        $hopitaux = Hopital::pluck('name', 'id')->all();
        return view('admin.ambulance.create', compact('villes', 'hopitaux', 'quartiers'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AmbulanceCreateRequest $request)
    {
        //
        $input = $request->all();

        Ambulance::create($input);

        return redirect('admin/ambulance');
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
        return view('admin.ambulance.show');
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
        return view('admin.ambulance.edit');
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
