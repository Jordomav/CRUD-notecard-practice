@extends('layout')

@section('content')
    <h1>Add a new card.</h1>
    <hr>
    <form method="POST" action="/cards/add/new">
        <div class="form-group"><textarea name="title" class="form-control"></textarea></div>
        <div class="form-group"><button type="submit" class="btn-danger btn">Add Card</button></div>
    </form>
    <a href="/">Go Back.</a>
@endsection