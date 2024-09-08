<x-app-layout>
    <x-slot name="header">
        <div class="d-flex justify-between">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Dashboard') }} : Best matched national parks based on your preferences
            </h2>

            <a class="btn btn-primary" href="{{route('questions.index')}}">
                Edit Preferences
            </a>
        </div>
    </x-slot>

    <div class="p-6">
        @foreach($places as $place)
            <div class="card mb-4 border border-dark border-2 ">
                <div class="card-body">
                    <h5 class="card-title fs-4 fw-bold">{{$place->name}}</h5>
                    <h6 class="card-subtitle mb-2 text-muted">{{$place->typeCount}} preferences matched.</h6>
                    <p class="card-text mb-4">{{$place->description}}</p>
                    <a href="{{route('place.show', $place->id)}}" class="btn btn-primary">Explore</a>
                </div>
            </div>

        @endforeach
    </div>
</x-app-layout>
