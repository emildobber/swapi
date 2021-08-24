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
//        dd(Person::all());
        return view('people.index', [
            'people' => Person::with(['planet', 'species'])->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return ResponseAlias
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return ResponseAlias
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Application|Factory|\Illuminate\Contracts\View\View|ResponseAlias
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

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return ResponseAlias
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return ResponseAlias
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return ResponseAlias
     */
    public function destroy($id)
    {
        //
    }
}
