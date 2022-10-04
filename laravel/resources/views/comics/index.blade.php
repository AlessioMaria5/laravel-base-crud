@extends('layout.layout')


@section('content')

<h2>My Comics List</h2>
<div class="comics-list">

@foreach ($comics as $comic)
<p>{{$comic->title}}</p>
@endforeach

</div>
@endsection