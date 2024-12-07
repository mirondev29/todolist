@extends('layouts/guest')

@section('title', 'добро пожаловать')

@section('content')
    <div class="container">
        <div class="row">
            <a href="{{route('login')}}">вход</a>
            <a href="{{route('register')}}">регистрация</a>
        </div>
    </div>

@endsection
