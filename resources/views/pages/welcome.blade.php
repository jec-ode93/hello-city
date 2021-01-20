@extends('template')

@section('title')

    {{config('app.name')  }}

@endsection
      
 @section('body')
        <img src="/images/coding.jpg" alt="Codeur">
        <h1>Hello from Quebec!</h1>
        <p>It's currently {{date('h:i A')}}</p>
@endsection




