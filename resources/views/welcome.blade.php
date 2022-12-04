<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<x-head/>
<body class="antialiased">
<div
    class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
    @if (Route::has('login'))
        <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
            @auth
                <a href="{{ url('/dashboard') }}" class="btn btn-primary">Dashboard</a>
            @else
                <a href="{{ route('login') }}" class="btn btn-primary">Log in</a>

                @if (Route::has('register'))
                    <a href="{{ route('register') }}" class="btn btn-primary ml-4">Register</a>
                @endif
            @endauth
        </div>
    @endif

    <div class="d-flex flex-column max-w-6xl mx-auto sm:px-6 lg:px-8">
        <div class="border border-white border-3 p-5 my-5 text-white text-center">
            <div class="bg-white mb-4" width="200" height="200">
                <img src="{{ asset('images/logo.png') }}" alt="logo" width="200" height="200">
            </div>
            <h1>Welcome to <span class="fw-bold">LetsGeo</span></h1>
            <p>Learning geology is more about the practical experience than just reading books.
                Lets
                geo lets you create plan to visit US National Parks based on your Geological Interests.
                Also, you can see who else is going there and has similar Geological Interests as you.</p>
        </div>
        <div class="text-start text-white">
            <p class="fw-bold underline">Instructions:</p>
            <ul class="list-group list-group-numbered">
                <li>Click Get Started button below or Login or Register Button from top right corner.</li>
                <li>If you are already logged in you can click Dashboard Button from top right corner.</li>
                <li>Then answer the preference questions for Geological features</li>
                <li>Then the software will suggest best matched US National Parks based on your preferences.</li>
                <li>Inside each National Park, you can see who else is going there and has similar interest as
                    you.
                </li>
            </ul>
        </div>
        <div class="mt-4">
            <a href="{{ route('dashboard') }}" class="btn btn-primary">Get Started</a>
        </div>
        <div class="text-center text-white mt-5">
            <p class="fw-bold">Created by Istiyak Sheyam.
                <br>isheyam@asu.edu
            </p>
            <p class="fs-6 mb-0">For GLG 101: Intro to Geology I (Physical) final project. Professor: Darryl Reano.</p>
            <span class="fs-6 fw-lighter fst-italic text-justify">This website is for academic purposes only. It doesn't maintain any data protection policy. I will not sell your data and try my best to secure your data. By using this website you take full responsibility of your data used in this website.</span>
            <br><span class="fs-6 fw-lighter fst-italic text-justify"><a href="https://www.flaticon.com/free-icons/geology" target="_blank" title="geology icons"> Logo Geology icons created by dDara - Flaticon</a></span>
        </div>

    </div>
</div>
</body>
</html>
