<?php

namespace App\Http\Controllers;

use App\Models\Feature;
use App\Models\Place;
use Illuminate\Http\Request;

class QuestionController extends Controller
{
    public function index()
    {
        $user = auth()->user();
        $features = Feature::all();

        return view('questions.index', compact('user', 'features'));
    }

    public function store(Request $request)
    {
        $user = auth()->user();

        $user->types()->sync($request->types);

        return redirect()->route('dashboard');
    }

    public function preferences()
    {
        $user = auth()->user();

        $types = $user->types;

        $features = $this->getFeaturesAndTypes($user, $types);

        return view('questions.preferences', compact('user', 'types', 'features'));
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
        return view('dashboard', compact('user', 'places'));
    }

    public function showPlace($id)
    {
        $user = auth()->user();
        $place = Place::find($id)->load('types.features');
        $features = $place->types->pluck('features')->flatten()->unique('id')->values()->sortBy('name');
        // get place types that match user types
        $matchedTypes = $place->types->intersect($user->types);
        $matchedFeatures = $this->getFeaturesAndTypes($user, $matchedTypes)->sortBy('name');
        // remove matched features if its type is empty
        $matchedFeatures = $matchedFeatures->filter(function ($feature) {
            return $feature->types->count() > 0;
        });

        $otherUsers = $place->users->where('id', '!=', $user->id)->values();

        return view('questions.place', compact('user', 'place', 'features', 'matchedFeatures', 'otherUsers'));
    }

    /**
     * @param \Illuminate\Contracts\Auth\Authenticatable|null $user
     * @param $types
     * @return mixed
     */
    public function getFeaturesAndTypes(?\Illuminate\Contracts\Auth\Authenticatable $user, $types)
    {
        $features = $user->types->load('features')->pluck('features')->flatten()->unique('id')->values();

        // for each feature, get the types that match the user's types save in $types
        $features->map(function ($feature) use ($types) {
            $feature->types = $types->filter(function ($type) use ($feature) {
                return $type->features->contains($feature);
            });
        });
        return $features;
    }

    public function going($id)
    {
        $user = auth()->user();
        $place = Place::find($id);
        $user->places()->syncWithoutDetaching($place);
        return redirect()->route('place.show', $place);
    }
}
