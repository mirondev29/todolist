@extends('layouts.app')

@section('title', 'Добро пожаловать!')

@section('content')
    <div class="d-flex justify-content-center align-items-center vh-100">
        <div class="welcome">
            <a href="{{ route('login') }}" class="btn">Войти</a>
            <a href="{{ route('register') }}" class="btn">Регистрация</a>
        </div>
    </div>
@endsection
