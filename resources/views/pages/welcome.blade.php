@extends('template')

@section('title')
       <title>AHello City</title>
@endsection
       
 @section('body')
        <h1>Hello from Quebec!</h1>
        <p>It's currently {{date('h:i A')}}</p>
@endsection


@section('footer')
        <p>&copy; copyright {{date('Y')}} &middot;  <a href="about_us">About Us</a></p>
@endsection

