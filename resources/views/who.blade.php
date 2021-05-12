
@extends('layout')

@section('content')

<link rel="stylesheet" href="{{asset ('assets/css/who.css')}}">

<div class="content">
    <h1 class="title">Qui som?</h1>
    <hr class="linia">

    <div class="text">
        <p class="exp">Lorem ipsum dolor sit amet, consectetur adipiscing elit. In varius mi vel ligula scelerisque, id euismod eros facilisis. Aliquam tempus libero suscipit erat eleifend posuere. Interdum et malesuada fames ac ante ipsum primis in faucibus. Etiam sollicitudin elit dolor, in egestas diam aliquam eget. Aliquam quis imperdiet quam. Morbi ut dui ante.</p>
        <img src="{{asset ('assets/img/who.jpg')}}">
        <a class="btn btn-dark" href="{{route('contact')}}">Contactan's</a>
    </div>

</div>


@endsection
