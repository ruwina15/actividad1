<?php

namespace App\Http\Controllers;

use App\Models\Superheroe;
use App\Models\Gender;
use App\Models\Universe;
use Illuminate\Http\Request;

class SuperheroeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $superheroes = Superheroe::all();
        return view('superheroe.index', compact('superheroes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $genders = Gender::select('id','name')->get(); //metodo de elocuent
        $universes = Universe::select('id','name')->get();
        
        return view('superheroe.create',compact('genders','universes'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
        Superheroe::create([  
           'gender_id'=>$request->gender_id,
           'universe_id'=>$request->universe_id,
           'name' => $request->name,
           'realName' => $request->realName,
           'Picture' => $request->Picture
        ]);

        return to_route('superheroes.index'); 
        //es superheroes porque asi quedo en la ruta /superheroes
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $superheroes = Superheroe::find($id);
        return view('superheroe.show',compact('superheroes'));

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
