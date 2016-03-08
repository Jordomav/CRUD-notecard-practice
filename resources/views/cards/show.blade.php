@extends('layout')
@section('title')
    This is the cards page.
@endsection
@section('content')
    {{--<pre>--}}
    {{--{{print_r($card)}}--}}
        {{--</pre>--}}
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <h1 class="jumbotron">This is a single card page.</h1>
            <hr>
            <h3>
                {{$card->title}}
            </h3>
            <hr>
                <ul class="list-group">
                    @foreach($card->notes as $note)
                        <li class="list-group-item">{{$note->body}}<a href="/notes/{{$note->id}}/edit"> Edit </a><a href="/delete/{{$note->id}}"> Delete</a></li>
                    @endforeach
                </ul>
            <hr>
            <form method="POST" action="/cards/{{$card->id}}/notes">
                <div class="form-group"><textarea name="body" class="form-control"></textarea></div>
                <div class="form-group"><button type="submit" class="btn-danger btn">Add a new note</button></div>
            </form>
            <a href="/">Go back</a>
        </div>
    </div>

@endsection