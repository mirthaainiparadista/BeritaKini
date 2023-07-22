@extends('index')
@section('content')
    <h1>{{ auth()->user()->name }}</h1>
    <form action="/logout" method="post"> 
        @csrf     
        <button class="btn btn-danger" type="submit">Logout</button>
      </form>
@endsection