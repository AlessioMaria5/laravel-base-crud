<form action="{{route('comics.store')}}" method="post">

    @csrf

    <label for="title">Title</label>
    <input id="title" type="text" name='title'>

    @error('title')
    <p>{{$message}}</p>
    @enderror


    <label for="description">Description</label>
    <input id="description" type="text" name="description">

    <label for="thumb">thumb</label>
    <input id="thumb" type="text" name='thumb'>
    @error('thunb')
    <p>{{$message}}</p>
    @enderror

    <label for="price">price</label>
    <input id="price" type="number" name='price'>
    @error('price')
    <p>{{$message}}</p>
    @enderror

    <label for="sale_date">sale_date</label>
    <input id="sale_date" type="date" name='sale_date'>
    @error('sale_date')
    <p>{{$message}}</p>
    @enderror

    <label for="type">type</label>
    <input id="type" type="string" name='type'>
    @error('type')
    <p>{{$message}}</p>
    @enderror

    <button type="submit">Invia</button>

</form>