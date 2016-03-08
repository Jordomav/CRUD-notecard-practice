@extends('layout')
@section('title')
    This is the cards page.
@endsection
@section('content')
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <h1 class="jumbotron">This is the Cards page.</h1>
            <hr>
            <a href="/cards/add">Add a new card.</a>
            <hr>
            <h2>Checkout my Notes!</h2>
            <hr>
            <ul>
                @foreach($cards as $card)
                    <li><a href="/show/{{$card->id}}">{{$card->title}}</a></li>
                    <a href="/delete/card/{{$card->id}}">Delete Card</a><br>
                    <a href="/edit/card/{{$card->id}}">Edit Card</a>
                    <hr>
                @endforeach
            </ul>
        </div>
    </div>
@endsection