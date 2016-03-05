@extends('layout')

@section('content')
    <h1>Edit the note</h1>
    <hr>
    <form method="POST" action="/notes/{{$note->id}}">
        {{method_field('PATCH')}}
        <div class="form-group"><textarea name="body" class="form-control">{{$note->body}}</textarea></div>
        <div class="form-group"><button type="submit" class="btn-danger btn">Update Note</button></div>
    </form>
    <a href="/show/{{$note->card_id}}">Go Back.</a>
@endsection