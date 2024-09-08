<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Geological Preference Questions
        </h2>
    </x-slot>

    <form class="form" action="{{route('questions.store')}}" method="POST">
        @csrf
        <div class="py-12 px-6">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6">
                    <div class="questions" id="Fossils">
                        <div class="fs-1 fw-bold text-primary">
                            What kinds of fossils you would like to see?
                        </div>

                        <div class="fs-6 fw-bold text-dark">
                            Select all that apply.
                        </div>

                        <div class="row border my-4 py-4">
                            @foreach($features->where('name', 'Fossils')->first()->types as $type)
                                <div class="col-6">
                                    <label class="form-check form-check-custom form-check-solid">
                                        <input class="form-check-input" type="checkbox" name="types[]"
                                               value="{{$type->id}}"
                                            {{$user->types->contains($type->id) ? 'checked' : ''}}/>
                                        <span class="form-check-label">{{$type->name}}</span>
                                    </label>
                                </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="questions" id="Glacier">
                        <div class="fs-1 fw-bold text-primary">
                            Which Glacier field you want to visit?
                        </div>

                        <div class="fs-6 fw-bold text-dark">
                            Select all that apply.
                        </div>

                        <div class="row border my-4 py-4">
                            @foreach($features->where('name', 'Glacier')->first()->types as $type)
                                <div class="col-6">
                                    <label class="form-check form-check-custom form-check-solid">
                                        <input class="form-check-input" type="checkbox" name="types[]"
                                               value="{{$type->id}}"
                                            {{$user->types->contains($type->id) ? 'checked' : ''}}/>
                                        <span class="form-check-label">{{$type->name}}</span>
                                    </label>
                                </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="questions" id="Hazards/Risk">
                        <div class="fs-1 fw-bold text-primary">
                            What type of hazards and risks you want to experience?
                        </div>

                        <div class="fs-6 fw-bold text-dark">
                            Select all that apply.
                        </div>

                        <div class="row border my-4 py-4">
                            @foreach($features->where('name', 'Hazards/Risk')->first()->types as $type)
                                <div class="col-6">
                                    <label class="form-check form-check-custom form-check-solid">
                                        <input class="form-check-input" type="checkbox" name="types[]"
                                               value="{{$type->id}}"
                                            {{$user->types->contains($type->id) ? 'checked' : ''}}/>
                                        <span class="form-check-label">{{$type->name}}</span>
                                    </label>
                                </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="questions" id="Minerals">
                        <div class="fs-1 fw-bold text-primary">
                            What type of minerals you want to see?
                        </div>

                        <div class="fs-6 fw-bold text-dark">
                            Select all that apply.
                        </div>

                        <div class="row border my-4 py-4">
                            @foreach($features->where('name', 'Minerals')->first()->types as $type)
                                <div class="col-6">
                                    <label class="form-check form-check-custom form-check-solid">
                                        <input class="form-check-input" type="checkbox" name="types[]"
                                               value="{{$type->id}}"
                                            {{$user->types->contains($type->id) ? 'checked' : ''}}/>
                                        <span class="form-check-label">{{$type->name}}</span>
                                    </label>
                                </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="questions" id="Mountains">
                        <div class="fs-1 fw-bold text-primary">
                            Which mountain you would like to explore?
                        </div>

                        <div class="fs-6 fw-bold text-dark">
                            Select all that apply.
                        </div>

                        <div class="row border my-4 py-4">
                            @foreach($features->where('name', 'Mountains')->first()->types as $type)
                                <div class="col-6">
                                    <label class="form-check form-check-custom form-check-solid">
                                        <input class="form-check-input" type="checkbox" name="types[]"
                                               value="{{$type->id}}"
                                            {{$user->types->contains($type->id) ? 'checked' : ''}}/>
                                        <span class="form-check-label">{{$type->name}}</span>
                                    </label>
                                </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="questions" id="PlateTectonics">
                        <div class="fs-1 fw-bold text-primary">
                            What type of Plate tectonics or Geologic formation you want to explore?
                        </div>

                        <div class="fs-6 fw-bold text-dark">
                            Select all that apply.
                        </div>

                        <div class="row border my-4 py-4">
                            @foreach($features->where('name', 'Plate Tectonics / Geologic Formation')->first()->types as $type)
                                <div class="col-6">
                                    <label class="form-check form-check-custom form-check-solid">
                                        <input class="form-check-input" type="checkbox" name="types[]"
                                               value="{{$type->id}}"
                                            {{$user->types->contains($type->id) ? 'checked' : ''}}/>
                                        <span class="form-check-label">{{$type->name}}</span>
                                    </label>
                                </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="questions" id="Rivers">
                        <div class="fs-1 fw-bold text-primary">
                            Which Rivers and streams you want to visit?
                        </div>

                        <div class="fs-6 fw-bold text-dark">
                            Select all that apply.
                        </div>

                        <div class="row border my-4 py-4">
                            @foreach($features->where('name', 'Rivers/Streams')->first()->types as $type)
                                <div class="col-6">
                                    <label class="form-check form-check-custom form-check-solid">
                                        <input class="form-check-input" type="checkbox" name="types[]"
                                               value="{{$type->id}}"
                                            {{$user->types->contains($type->id) ? 'checked' : ''}}/>
                                        <span class="form-check-label">{{$type->name}}</span>
                                    </label>
                                </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="questions" id="Rocks">
                        <div class="fs-1 fw-bold text-primary">
                            What type of rocks you want to see?
                        </div>

                        <div class="fs-6 fw-bold text-dark">
                            Select all that apply.
                        </div>

                        <div class="row border my-4 py-4">
                            @foreach($features->where('name', 'Rocks')->first()->types as $type)
                                <div class="col-6">
                                    <label class="form-check form-check-custom form-check-solid">
                                        <input class="form-check-input" type="checkbox" name="types[]"
                                               value="{{$type->id}}"
                                            {{$user->types->contains($type->id) ? 'checked' : ''}}/>
                                        <span class="form-check-label">{{$type->name}}</span>
                                    </label>
                                </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="questions" id="Volcanoes">
                        <div class="fs-1 fw-bold text-primary">
                            Which volcano/volcanic activity you would explore?
                        </div>

                        <div class="fs-6 fw-bold text-dark">
                            Select all that apply.
                        </div>

                        <div class="row border my-4 py-4">
                            @foreach($features->where('name', 'Volcanoes/Volcanic Activity')->first()->types as $type)
                                <div class="col-6">
                                    <label class="form-check form-check-custom form-check-solid">
                                        <input class="form-check-input" type="checkbox" name="types[]"
                                               value="{{$type->id}}"
                                            {{$user->types->contains($type->id) ? 'checked' : ''}}/>
                                        <span class="form-check-label">{{$type->name}}</span>
                                    </label>
                                </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="questions" id="Weather/Climate">
                        <div class="fs-1 fw-bold text-primary">
                            What kind of climate you would prefer?
                        </div>

                        <div class="fs-6 fw-bold text-dark">
                            Select all that apply.
                        </div>

                        <div class="row border my-4 py-4">
                            @foreach($features->where('name', 'Weather/Climate')->first()->types as $type)
                                <div class="col-6">
                                    <label class="form-check form-check-custom form-check-solid">
                                        <input class="form-check-input" type="checkbox" name="types[]"
                                               value="{{$type->id}}"
                                            {{$user->types->contains($type->id) ? 'checked' : ''}}/>
                                        <span class="form-check-label">{{$type->name}}</span>
                                    </label>
                                </div>
                            @endforeach
                        </div>
                    </div>

                    <div class="d-flex justify-content-between">
                        <a class="btn btn-outline-primary" id="previousBtn"> < Previous </a>
                        <a class="btn btn-primary" id="nxtBtn"> Next ></a>
                        <button class="btn btn-primary" id="submitBtn"> Submit</button>
                    </div>
                </div>
            </div>
        </div>

    </form>

    <script>

        //get all questions
        const questions = document.querySelectorAll('.questions');
        // hide all questions
        questions.forEach(question => {
            question.style.display = 'none';
        });

        // show first question
        // when next button is clicked
        // show next question
        // when previous button is clicked
        // show previous question
        // if first question is shown
        // hide previous button
        // if last question is shown
        // show submit button

        let currentQuestion = 0;
        questions[currentQuestion].style.display = 'block';
        document.querySelector('#previousBtn').style.display = 'none';
        document.querySelector('#submitBtn').style.display = 'none';

        document.querySelector('#nxtBtn').addEventListener('click', () => {
            questions[currentQuestion].style.display = 'none';
            currentQuestion++;
            if (currentQuestion === questions.length - 1) {
                document.querySelector('#nxtBtn').style.display = 'none';
                document.querySelector('#submitBtn').style.display = 'block';
            }
            if (currentQuestion > 0) {
                document.querySelector('#previousBtn').style.display = 'block';
            }
            questions[currentQuestion].style.display = 'block';
        });
        document.querySelector('#previousBtn').addEventListener('click', () => {
            questions[currentQuestion].style.display = 'none';
            currentQuestion--;
            if (currentQuestion === 0) {
                document.querySelector('#previousBtn').style.display = 'none';
            }
            if (currentQuestion < questions.length - 1) {
                document.querySelector('#nxtBtn').style.display = 'block';
                document.querySelector('#submitBtn').style.display = 'none';
            }
            questions[currentQuestion].style.display = 'block';
        });

        // if no option is selected for current question
        // disable next button
        // if any option is selected for current question
        // enable next button

        // questions.forEach(question => {
        //     question.addEventListener('change', () => {
        //         if (question.querySelectorAll('input[type="checkbox"]:checked').length === 0) {
        //             document.querySelector('#nxtBtn').disabled = true;
        //         } else {
        //             document.querySelector('#nxtBtn').disabled = false;
        //         }
        //     });
        // });


    </script>
</x-app-layout>
