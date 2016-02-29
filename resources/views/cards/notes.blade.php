@extends('layout')
@section('title')
    This is the notes page.
@endsection
@section('content')
    <h1>This is the Notes page.</h1>
    <ul>
        @foreach($notes as $note)
            <li>{{$note->id}}: {{$note->body}} <strong>Related Card:</strong> {{$note->card_id}}</li>
        @endforeach
    </ul>
@endsection