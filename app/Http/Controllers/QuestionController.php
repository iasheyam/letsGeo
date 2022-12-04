<?php

namespace App\Http\Controllers;

use App\Models\Feature;
use Illuminate\Http\Request;

class QuestionController extends Controller
{
    public function index()
    {
        $user = auth()->user();
        $features = Feature::all();

        return view('questions.index', compact('user','features'));
    }

    public function store(Request $request)
    {


        $user = auth()->user();

        $user->types()->sync($request->types);

        return redirect()->route('questions.index');
    }

    public function preferences()
    {
        $user = auth()->user();

        $types = $user->types;

        $features = $user->types->load('features')->pluck('features')->flatten()->unique('id')->values();

        // for each feature, get the types that match the user's types save in $types
        $features->map(function ($feature) use ($types) {
            $feature->types = $types->filter(function ($type) use ($feature) {
                return $type->features->contains($feature);
            });
        });

        return view('questions.preferences', compact('user','types','features'));
    }

    public function suggestedPlaces()
    {
        $user = auth()->user();

        $types = $user->types;

        // get all the places that match the user's types
        // order by the number of types that match
        $places = $types->load('places')->pluck('places')->flatten()->unique('id')->values()->sortByDesc(function ($place) use ($types) {
            $place->typeCount = $place->types->intersect($types)->count();
            return $place->typeCount;
        });
        return view('dashboard', compact('user','places'));
    }
}
