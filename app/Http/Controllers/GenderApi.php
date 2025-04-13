<?php

namespace App\Http\Controllers;

use App\Models\Gender;
use Illuminate\Http\Request;

class GenderApi extends Controller
{
    public function index(){
        $genders = Gender::all();
        return response()->json($genders);
    }

    public function show($param) {
        if (is_numeric($param)) {
            $gender = Gender::where('id', $param)->with('superheroes')->get();
        } else {
            $gender = Gender::where('name', $param)->with('superheroes')->get();
        }
        
        return response()->json($gender);
    }
}
