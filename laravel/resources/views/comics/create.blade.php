<form action="{{route('comics.store')}}" method="post">

    @csrf

    <label for="title">Title</label>
    <input id="title" type="text" name='title'>


    <label for="description">Description</label>
    <input id="description" type="text" name="description">

    <label for="thumb">thumb</label>
    <input id="thumb" type="text" name='thumb'>

    <label for="price">price</label>
    <input id="price" type="number" name='price'>

    <label for="sale_date">sale_date</label>
    <input id="sale_date" type="date" name='sale_date'>

    <label for="type">type</label>
    <input id="type" type="string" name='type'>

    <button type="submit">Invia</button>

</form>