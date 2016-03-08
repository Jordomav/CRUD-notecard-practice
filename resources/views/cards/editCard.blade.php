@extends('layout')

@section('content')
    <h1>Edit the card</h1>
    <hr>
    <form method="POST" action="/edit/{{$card->id}}">
        {{method_field('PATCH')}}
        <div class="form-group"><textarea name="title" class="form-control">{{$card->title}}</textarea></div>
        <div class="form-group"><button type="submit" class="btn-danger btn">Update Card</button></div>
    </form>
    <a href="/">Go Back.</a>
@endsection