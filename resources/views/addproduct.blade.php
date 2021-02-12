<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">

    <!--TODO -->

</head>
<body>
<x-header/>
<section class="intro-section">
    <div id="intro-bg">
        <div class="overlay"></div>
        <div class="container pb-5">
            <div class="row justify-content-center">
                <x-header-intro/>
                <x-search-bar/>
            </div>
        </div>
    </div>
</section>
<section>
    <div class="container">
        <div class="row justify-content-center">
            <div class="container mt-5 mb-5">
                    <div class="col-12 col-md-6 margin-auto">
                        @if($errors->any())
                            @foreach($errors->all() as $error)
                                <div class="alert alert-danger" role="alert">{{$error}}</div>
                            @endforeach
                        @endif
                        <form method="post" action="{{url('/addproduct')}}" enctype="multipart/form-data" onsubmit="return confirm('Czy jesteś pewien, że chcesz dodać ogłoszenie');">
                            {{csrf_field()}}

                            <div class="form-group">
                                <h4>Nazwa</h4>
                                <input type="text" class="form-control" placeholder="Nazwa twojego produktu" name="title">
                            </div>

                            <div class="form-group">
                                <h4>Kategoria</h4>
                                <select class="form-control" name="categoryId">
                                    @foreach($categories as $c)
                                        <option value="{{$c->id}}">{{$c->title}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <h4>Zdjecie</h4>
                                <input type="file" class="form-control-file" name="image">
                            </div>
                            <div class="form-group">
                                <h4>Opis ogłoszenia</h4>
                                <textarea class="form-control" rows="3" placeholder="Opis twojego ogłoszenia" name="description"></textarea>
                            </div>
                            <div class="form-group">
                                <h4>Cena</h4>
                                <input type="number" class="form-control" placeholder="Wprowawdź swoją cene" name="cost" min="0" max="100000">
                            </div>
                            <div class="form-group">
                                <h4>Numer telefonu</h4>
                                <input type="number" class="form-control" placeholder="Wprowadź numer telefonu" name="phone">
                            </div>
                            <div class="form-group">
                                <h4>Miasto</h4>
                                <input type="text" class="form-control" placeholder="Wprowadź miasto" name="city">
                            </div>

                            <button class="btn btn-primary mt-2 mb-3 w-100 border-radius-20 box-shadow-black" ><i class="fas fa-plus mr-2"></i>Dodaj</button>
                        </form>
                    </div>
            </div>
        </div>
    </div>
</section>
<x-footer/>
<script src="{{ asset('js/app.js') }}" type="text/javascript"></script>

<!--<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
-->
</body>
</html>
