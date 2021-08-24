<?php

namespace App\Http\Controllers;

use App\Models\Person;
use App\Models\Planet;
use App\Models\Species;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Http;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    function fillDatabase(){
        Person::truncate();
        $people = Http::get('https://swapi.dev/api/people')->object()->results;
        foreach($people as $person){
            $planet_id = filter_var($person->homeworld, FILTER_SANITIZE_NUMBER_INT);
            $species_id = filter_var(array_shift($person->species), FILTER_SANITIZE_NUMBER_INT);
            Person::create([
                'name' => $person->name,
                'height' => $person->height,
                'birth_year' => $person->birth_year,
                'gender' => $person->gender,
                'planet_id' => $planet_id,
                'species_id' => $species_id !== "" ? $species_id : 1
            ]);
        }

        Planet::truncate();
        $planets = Http::get('https://swapi.dev/api/planets')->object()->results;
        foreach($planets as $planet){
            Planet::create([
                'name' => $planet->name,
                'diameter' => $planet->diameter,
                'population' => $planet->population,
//                'residents' => $planet->gender,
            ]);
        }

        Species::truncate();
        $species = Http::get('https://swapi.dev/api/species')->object()->results;
        foreach($species as $specie){
            $planet_id = filter_var($person->homeworld, FILTER_SANITIZE_NUMBER_INT);
            Species::create([
                'name' => $specie->name,
                'classification' => $specie->classification,
                'planet_id' => $planet_id,
            ]);
        }
        return redirect('people');
    }
}
