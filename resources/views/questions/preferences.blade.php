<x-app-layout>
    <x-slot name="header">
        <div class="d-flex justify-between">

            <h2 class="font-semibold text-xl text-gray-800 leading-tight align-middle">
                Your Geological Preferences
            </h2>

            <a class="btn btn-primary" href="{{route('questions.index')}}">
                Edit Preferences
            </a>
        </div>
    </x-slot>

    <div class="p-6">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title"></h5>
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
                            <td>{{$feature->types->pluck('name')->implode(', ')}}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>

            </div>
        </div>
    </div>
</x-app-layout>
