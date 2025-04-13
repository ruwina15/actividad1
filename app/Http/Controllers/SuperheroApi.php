<?php

namespace App\Http\Controllers;

use App\Models\Superheroe;
use Illuminate\Http\Request;

class SuperheroApi extends Controller
{
    public function index(){
        $superheroes = Superheroe::all();
        return response()->json($superheroes);
    }
    
    public function show($param) {
        if (is_numeric($param)) {
            $superheroe = Superheroe::where('id', $param)->with('universo', 'genero')->get();
        } else {
            $superheroe = Superheroe::where('name', $param)->with('universo', 'genero')->get();
        }
        
        return response()->json($superheroe);
    }
    
}
