<link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">

<div class="container">
<form method="post" action="{{url('/addproduct')}}" enctype="multipart/form-data">
    {{csrf_field()}}

    <div class="form-group">
        <label >Nazwa</label>
        <input type="text" class="form-control" placeholder="Nazwa" name="title">
    </div>

<div class="">
        <label>kategorie</label>
        <select class="form-control" name="categoryId">
            @foreach($categories as $c)
                <option value="{{$c->id}}">{{$c->title}}</option>
            @endforeach
        </select>
</div>

    <div class="form-group">
        <label>zdjęcie</label>
        <input type="file" class="form-control-file" name="image">
    </div>
    <div class="form-group">
        <label >opis</label>
        <textarea class="form-control" rows="3" name="description"></textarea>
    </div>

        <div class="form-group">
            <label>cena</label>
            <input type="number" class="form-control" placeholder="cena" name="cost">
        </div>
    <button class="btn btn-primary">dodaj</button>
</form>
</div>
