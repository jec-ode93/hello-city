@extends('template')

@section('title')

    {{ config('app.name') }}

@endsection

@section('body')
    <img src="{{ asset('/images/coding.jpg') }}" alt="Codeur" class="rounded-full shadow-md h-32">
    <h1 class=" mt-5 text-3xl sm:text-5xl font-semi-bold text-indigo-600">Hello from Quebec!</h1>
    <p class="text-lg text-gray-800">It's currently {{ date('h:i A') }}</p>
@endsection
