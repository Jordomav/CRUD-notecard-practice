@extends('layout')
@section('title')
    This is the cards page.
@endsection
@section('content')
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <h1 class="jumbotron">This is the Cards page.</h1>
            <h2>Checkout my Notes!</h2>
            <ul>
                @foreach($cards as $card)
                    <li><a href="/show/{{$card->id}}">{{$card->title}}</a></li>
                @endforeach
            </ul>
        </div>
    </div>
@endsection