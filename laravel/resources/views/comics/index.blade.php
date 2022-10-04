@extends('layout.layout')


@section('content')

<h2>My Comics List</h2>
<div class="comics-list">

@foreach ($comics as $comic)
<span>{{$comic->title}}</span>
<a href="{{route('comics.show', $comic )}}">Mostra</a>
<a href="{{route('comics.edit',$comic)}}">Modifica</a>
<form action="{{route('comics.destroy', $comic)}}" method="post">
    @method('DELETE')
    @csrf
<button type="submit">Delete</button>
</form>

<br>
@endforeach

</div>
@endsection