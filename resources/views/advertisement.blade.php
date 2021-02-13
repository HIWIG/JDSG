<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@1,500&display=swap" rel="stylesheet">

{{--    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">--}}
{{--    <link rel="stylesheet" type="text/css" href="css/fontawsome/css/all.css">--}}
{{--    <link rel="stylesheet" type="text/css" href="css/main-style.css">--}}
    <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">


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



<div class="section-padding bg-light">
    <div class="container">
        <div class="ad-info row ">

            <div class="col-lg-8  col-12 ">

                <div class="wrapper shadow-sm p-5 mt-3 bg-white rounded ">
                    <h4>
                    {{$adv->first()->title}}
                    </h4>


                    <div id="carouselExampleIndicators" class="carousel slide"  data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                        </ol>
                        <div class="carousel-inner height-600 img-center">
                            <div class="carousel-item active">
                                <img src="{{asset('/storage/img/products/'.$adv->first()->image)}}" class="d-block w-100 height-auto  mx-auto"  alt="1">
                            </div>
                            <div class="carousel-item">
                                <img src="{{asset('/storage/img/products/'.$adv->first()->image)}}" class="d-block w-100 height-auto  mx-auto"  alt="2">
                            </div>
                            <div class="carousel-item">
                                <img src="{{asset('/storage/img/products/'.$adv->first()->image)}}" class="d-block w-100 height-auto  mx-auto"  alt="3">
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                    <div class="pb-5">

                        <p class="font-weight-bold ad-font-color">{{$adv->first()->cost}} zł</p><br>
                        <h4>Opis</h4>
                        <br>
                        {{$adv->first()->description}}
                    </div>
                    <div class="tags">

                        <ul class="list-inline">
                            <li class="list-inline-item p-1">
                                <span class="far fa-calendar-alt pr-1 font-menu-color"></span>
                                {{substr($adv->first()->created_at,0,strrpos($adv->first()->created_at,' '))}}
                            </li>
                            <li class="list-inline-item p-1">
                                <span class="fas fa-user pr-1 font-menu-color"></span>
                                {{$adv->first()->user->username}}
                            </li>
                            <li class="list-inline-item p-1">
                                <span class="fas fa-desktop pr-1 font-menu-color"></span>
                                {{$adv->first()->category->title}}
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 col-12 ">
                <div class="seller-info shadow-sm p-5 mt-3  bg-white rounded">
                    <h4>Dane sprzedawcy</h4>
                    <br>

                    <!--                    <div class="photo"></div>-->
                    <b>{{$adv->first()->user->name}} {{$adv->first()->user->surname}}</b>
                    <br>
                    <br>
                    <i class="fas fa-phone"></i> {{$adv->first()->phone}}
                    <br>
                    <i class="far fa-envelope"></i> {{$adv->first()->user->email}}
                    <br>
                    <i class="fas fa-map-marker-alt"></i> {{$adv->first()->city}}
                    <br>
                    <a href="">Wszystkie produkty</a>

                </div>
            </div>

            <div class="col-lg-12 col-md-6 col-12 ">
                <div class="bottom-info p-5 shadow-sm mt-3 bg-white rounded">
                    <h4>Podobne przedmioty</h4>
                    <div class="other-products row ">
                        @foreach($adve as $a)
                        <div class="col-lg-4 col-12 shadow-sm rounded p-3 row">
                            <div class="col-6">
{{--                                <a href="" class="link">--}}
                                    <img src="{{asset('/storage/img/products/'.$a->image)}}" class="other-photo" alt="">
{{--                                </a>--}}
                            </div>
                            <div class="col-6 pl-3">
{{--                                <a href="" class="link">--}}

                                    <p class="font-weight-bold">{{mb_strimwidth($a->title,0,20,"...")}}</p>
                                    <form action="{{url('/advertisement')}}" type="get">
                                        <button type="submit" class="btn btn-primary border-radius-20" class="fas fa-pen-square mr-1" name="x" value="{{$a->id}}">  Więcej  </button>
                                    </form>
{{--                                    {{$a->cost}}--}}
{{--                                </a>--}}

                            </div>
                        </div>
                        @endforeach

                    </div>
                </div>
            </div>

        </div>
    </div>
</div>


<x-footer/>

<script src="{{ asset('js/app.js') }}" type="text/javascript"></script>


{{--<script src="js/jquery.js" type="text/javascript"></script>--}}

{{--<script src="js/bootstrap.bundle.min.js" type="text/javascript"></script>--}}

</body>
</html>
