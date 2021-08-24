<?php

namespace App\Http\Controllers;

use App\Models\Person;
use App\Models\Planet;
use App\Models\Species;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\Request;
use Illuminate\Http\Response as ResponseAlias;
use Illuminate\Support\Facades\Http;
use Illuminate\View\View;

class PeopleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|\Illuminate\Contracts\View\View|View
     */
    public function index()
    {
        return view('people.index', [
            'people' => Person::with(['planet', 'species'])->get()
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Application|Factory|\Illuminate\Contracts\View\View|View
     */
    public function show($id)
    {
        $person = Person::findorfail($id);

        return view('people.show', [
            'person' => $person,
            'planet' => Planet::find($person->planet_id),
            'species' => Species::find($person->species_id)
        ]);
    }
}
