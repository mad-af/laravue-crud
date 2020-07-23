<?php

namespace App\Http\Controllers;

use App\Person;
use Illuminate\Http\Request;

class PersonController extends Controller
{

    public function index()
    {
        return Person::all();
    }

    public function store(Request $request)
    {
        return Person::create($request->all());
    }

    public function show($id)
    {
        return Person::find($id);
    }

    public function update(Request $request, $id)
    {
        $person = Person::find($id);
        $person->update($request->all());
        return $person;
    }

    public function destroy($id)
    {
        $person = Person::find($id);
        $person->delete();
    }
}
