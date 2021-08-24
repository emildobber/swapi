<?php

namespace App\Http\Controllers;

use App\Models\Person;
use App\Models\Planet;
use App\Models\Species;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\Request;
use Illuminate\View\View;

class SpeciesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|\Illuminate\Contracts\View\View|View
     */
    public function index()
    {
        return view('species.index', [
            'species' => Species::with(['planet'])->get(),
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
        $species = Species::findorfail($id);


        return view('species.show', [
            'species' => $species,
            'planet' => Planet::find($species->planet_id)
        ]);
    }
}
