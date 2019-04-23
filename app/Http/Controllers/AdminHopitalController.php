<?php

namespace App\Http\Controllers;

use App\Hopital;
use App\Quartier;
use Illuminate\Http\Request;
use App\Http\Requests\HopitalCreateRequest;
use App\Ville;
use App\Structure;

use App\Http\Requests;

class AdminHopitalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $hopitals = Hopital::all();

        return view('admin.hopital.index', compact('hopitals'));

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
        $structures = Structure::pluck('name', 'id')->all();
        return view('admin.hopital.create', compact('quartiers', 'villes', 'structures'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(HopitalCreateRequest $request)
    {
        //
        $input = $request->all();

        Hopital::create($input);

        return redirect('admin/hopital');
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
       /* return view('admin.hopital.show');*/
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
        return view('admin.hopital.edit');
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
