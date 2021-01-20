@extends('template')

@section('title')
       <title>About Us | Hello City</title>
@endsection
       
 @section('body')
        <!-- <h1>Hello from Quebec!</h1> -->
        <p>Built with &hearts; by JEC-ODE93</p>
        <p><a href="/">Revenir vers la page d'accueil</a> </p>
@endsection


@section('footer')
        <p>&copy; copyright {{date('Y')}}</p>
@endsection
