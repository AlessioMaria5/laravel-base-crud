@extends('layout.layout')


@section('content')

<h2>My Comics List</h2>
<div class="comics-list">

@foreach ($comics as $comic)
<span>{{$comic->title}}</span>
<form action="{{route('comics.destroy', $comic)}}" method="post">
    @method('DELETE')
    @csrf
<button type="submit">Delete</button>
</form>

<br>
@endforeach

</div>
@endsection