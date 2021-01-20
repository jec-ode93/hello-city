@extends('template')

@section('title')

    {{config('app.name')  }}

@endsection
      
 @section('body')
        <h1>Hello from Quebec!</h1>
        <p>It's currently {{date('h:i A')}}</p>
@endsection


@section('footer')
        <p>&copy; copyright {{date('Y')}} &middot;  <a href="{{route('about')}}">About Us</a></p>
@endsection

