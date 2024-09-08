<x-app-layout>
    <x-slot name="header">
        <div class="d-flex flex-column">
            <h2 class="fw-bold text-xl text-primary leading-tight pb-4">
                {{$place->name}}
            </h2>
            <p class="card-text mb-4">{{$place->description}}</p>
            <p class="card-text mb-4">NPS Website Link : <a class="underline" target="_blank"
                                                            href="{{$place->website}}">{{$place->website}}</a></p>


            @if($user->places->contains($place->id))
                <p class="card-text text-primary">You marked this place as I am going.</p>
            @else
                <form method="POST" action="{{route('place.going', $place->id)}}">
                    @csrf
                    <button class="btn btn-primary">Mark as Going</button>
                </form>
            @endif
        </div>
    </x-slot>

    <div class="p-6">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title fw-bold mb-4">See who else is going to {{$place->name}}.</h5>
                @if($otherUsers->isNotEmpty())
                    <table class="table border table-striped">
                        <thead>
                        <tr>
                            <th>Name</th>
                            <th>Email</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($otherUsers as $otherUser)
                            <tr>
                                <td>{{$otherUser->name}}</td>
                                <td>{{$otherUser->email}}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                @else
                    <p class="card-text text-danger mb-2">No one else is going to {{$place->name}} right now.</p>
                @endif

            </div>
        </div>
    </div>
    <div class="p-6">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title fw-bold mb-2">{{$place->name}} Geological Features that matches with your
                    preferences:</h5>
                <h5 class="card-text mb-4">Click on each type to see their information source.</h5>
                <table class="table border table-striped">
                    <thead>
                    <tr>
                        <th>Features</th>
                        <th>Types</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($matchedFeatures as $feature)
                        <tr>
                            <td>{{$feature->name}}</td>
                            <td>@foreach($feature->types as $type)
                                    <a href="{{$type->source}}" target="_blank"> {{$type->name}}</a>,
                                @endforeach</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>

            </div>
        </div>
    </div>
    <div class="p-6">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title fw-bold mb-2">{{$place->name}} all Geological Features:</h5>
                <h5 class="card-text mb-4">Click on each type to see their information source.</h5>
                <table class="table border table-striped">
                    <thead>
                    <tr>
                        <th>Features</th>
                        <th>Types</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($features->sortBy('name') as $feature)
                        <tr>
                            <td>{{$feature->name}}</td>
                            <td>@foreach($feature->types as $type)
                                    <a href="{{$type->source}}" target="_blank"> {{$type->name}}</a>,
                                @endforeach</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>

            </div>
        </div>
    </div>

</x-app-layout>
