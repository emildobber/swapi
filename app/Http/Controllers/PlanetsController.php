<?php

namespace App\Http\Controllers;

use App\Models\Person;
use App\Models\Planet;
use App\Models\Species;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\Request;
use Illuminate\View\View;

class PlanetsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|\Illuminate\Contracts\View\View|View
     */
    public function index()
    {
        return view('planets.index', [
            'planets' => Planet::all(),
            'residents' => Person::all()
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
        $planet = Planet::findorfail($id);
        $residents = Person::where('planet_id', $planet->id)->get();


        return view('planets.show', [
            'planet' => $planet,
            'residents' => $residents
        ]);
    }
}
