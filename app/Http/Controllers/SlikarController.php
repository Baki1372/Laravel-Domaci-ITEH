<?php

namespace App\Http\Controllers;

use App\Models\Slikar;
use Illuminate\Http\Request;
use App\Http\Resources\SlikarResource;
use Illuminate\Support\Facades\Validator;

class SlikarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $slikari = Slikar::all();
        return SlikarResource::collection($slikari);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Slikar  $slikar
     * @return \Illuminate\Http\Response
     */
    public function show(Slikar $slikar)
    {
        return new SlikarResource($slikar);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Slikar  $slikar
     * @return \Illuminate\Http\Response
     */
    public function edit(Slikar $slikar)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Slikar  $slikar
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Slikar $slikar)
    {
        $validator = Validator::make($request->all(), [
            'ime' => 'required',
            'prezime' => 'required',
            'godine' => 'required',
            'broj_telefona' => 'required'
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors());
        }

        $slikar->ime = $request->ime;
        $slikar->prezime = $request->prezime;
        $slikar->godine = $request->godine;
        $slikar->broj_telefona = $request->broj_telefona;

        $slikar->save();

        return response()->json(['Podaci o slikaru su azurirani', new SlikarResource($slikar)]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Slikar  $slikar
     * @return \Illuminate\Http\Response
     */
    public function destroy(Slikar $slikar)
    {
        $slikar->delete();
        return response()->json(['Slikar je obrisan iz baze podataka', new SlikarResource($slikar)]);
    }
}
