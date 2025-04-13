<?php

namespace App\Http\Controllers;

use App\Models\Universe;
use Illuminate\Http\Request;

class UniverseApi extends Controller
{
    public function index(){
        $universes = Universe::all();
        return response()->json($universes);
    }

    /* public function show($id){
        $universe = Universe::with('superheroes')->findOrFail($id);
        return response()->json($universe);
    } 

    public function show($name){
        $universe = Universe::where('name',$name)->with('superheroes')->get();
        return response()->json($universe);
    } */

    public function show($param) {
        if (is_numeric($param)) {
            $universe = Universe::where('id', $param)->with('superheroes')->get();
        } else {
            $universe = Universe::where('name', $param)->with('superheroes')->get();
        }
        
        return response()->json($universe);
    }
}
