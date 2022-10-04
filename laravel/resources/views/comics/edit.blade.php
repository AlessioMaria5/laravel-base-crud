<form action="{{route('comics.update', $myComics)}}" method="post">
    @method('PATCH')
    @csrf

    <label for="title">Title</label>
    <input id="title" type="text" name='title' value='{{$myComics->title}}'>


    <label for="description">Description</label>
    <input id="description" type="text" name="description" value='{{$myComics->description}}'>

    <label for="thumb">thumb</label>
    <input id="thumb" type="text" name='thumb' value='{{$myComics->thumb}}'>

    <label for="price">price</label>
    <input id="price" type="number" name='price' value='{{$myComics->price}}'>

    <label for="sale_date">sale_date</label>
    <input id="sale_date" type="date" name='sale_date' value='{{$myComics->sale_date}}'>

    <label for="type">type</label>
    <input id="type" type="string" name='type' value='{{$myComics->type}}'>

    <button type="submit">Modifica</button>

</form>