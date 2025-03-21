<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Gender;

class GenderController extends Controller
{
    public function index()
    {
        $genders = Gender::all();
        return view('gender.index', compact('genders'));
    }

    public function create()
    {
        return view('gender.create');
    }

    public function store(Request $request)
    {
        Gender::create([  
            'name' => $request->name
        ]);

        return to_route('genders.index'); 
    }

    public function show(string $id)
    {
        $genders = Gender::find($id);
        return view('gender.show',compact('genders'));

    }

    public function edit(string $id)
    {
        $genders = Gender::find($id);
        return view ('gender.edit', compact('genders'));
    }

    public function update(Request $request, string $id)
    {
        $genders = Gender::find($id);
        $genders->update([
           'name' => $request->name,
        ]);
        return to_route('genders.index');
    }

    public function destroy(string $id)
    {
        $genders = Gender::find($id);
        $genders->delete();
        return to_route('genders.index');
    }
}
