@extends('layout')
@section('title')
    This is the cards page.
@endsection
@section('content')
    <pre>
    {{print_r($card)}}
        </pre>
    <h1>This is a single card page.</h1>
    <h3>
        {{$card->title}}
    </h3>
    <div>
        Card ID: {{$card->id}}
    </div>
    <ul>
        @foreach($card->notes as $note)
            <li>{{$note->body}}</li>
        @endforeach
    </ul>
@endsection