@extends('template')

<!-- @section('title', 'About Us | Hello City') other solutions by adding the title as an argument-->



@section('title')
    About Us | {{ config('app.name') }}
@endsection

@section('body')
    <!-- <h1>Hello from Quebec!</h1> -->
    <img src="{{ asset('/images/developer.jpg') }}" alt="Codeur" class="my-12 rounded-full shadow-md h-32">

    <h2 class="text-gray-700">Built with <span class="text-pink-500">&hearts;</span> by JEC-ODE93</h2>
    <p><a href="{{ route('home') }}" class="text-indigo-500 hover:text-indigo-600 underline">Revenir vers la page
            d'accueil</a> </p>
@endsection
