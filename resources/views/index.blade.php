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
                <x-intro-search/>
            </div>
        </div>
    </div>
</section>
<section id="categories" class="bg-light section-padding ">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 text-center">
                <div class="heading mb-5">
                    <h3 class="section-title">Kategorie Ogłoszeń</h3>
                    <h5 class="sub-title">Znajdź swoją kategorię</h5>
                </div>
                <div class="categoryContainer">
                  <a href="{{route('category',['x'=>'1','k'=>'Laptopy'])}}"> <div class="categoryBox">
                        <i class="fas fa-laptop fa-3x"></i>
                        <div class="categoryName">Laptopy</div>
                    </div>
                  </a>
                    <a href="{{route('category',['x'=>'1','k'=>'Monitory'])}}">
                    <div class="categoryBox">
                        <i class="fas fa-desktop fa-3x"></i>
                        <div class="categoryName">Monitory</div>
                    </div>
                    </a>
                    <a href="{{route('category',['x'=>'1','k'=>'Klawiatury'])}}">
                    <div class="categoryBox">
                        <i class="far fa-keyboard  fa-3x"></i>
                        <div class="categoryName">Klawiatury</div>
                    </div>
                    </a>
                    <a href="{{route('category',['x'=>'1','k'=>'Słuchawki'])}}">
                    <div class="categoryBox">
                        <i class="fas fa-headphones fa-3x"></i>
                        <div class="categoryName">Słuchawki</div>
                    </div>
                    </a>
                    <a href="{{route('category',['x'=>'1','k'=>'Myszki'])}}">
                    <div class="categoryBox">
                        <i class="fas fa-mouse fa-3x"></i>
                        <div class="categoryName">Myszki</div>
                    </div>
                    </a>
                    <a href="{{route('category',['x'=>'1','k'=>'Telefony'])}}">
                    <div class="categoryBox">
                        <i class="fas fa-mobile-alt fa-3x"></i>
                        <div class="categoryName">Telefony</div>
                    </div>
                    </a>
                    <a href="{{route('category',['x'=>'1','k'=>'Dyski'])}}">
                    <div class="categoryBox">
                        <i class="fas fa-hdd fa-3x"></i>
                        <div class="categoryName">Dyski</div>
                    </div>
                    </a>
                    <a href="{{route('category',['x'=>'1','k'=>'Podzespoły komputerowe'])}}">
                    <div class="categoryBox">
                        <i class="fas fa-memory fa-3x"></i>
                        <div class="categoryName">Podzespoły komputerowe</div>
                    </div>
                    </a>
                    <a href="{{route('category',['x'=>'1','k'=>'Konsole'])}}">
                    <div class="categoryBox">
                        <i class="fas fa-gamepad fa-3x"></i>
                        <div class="categoryName">Konsole</div>
                    </div>
                    </a>
                    <a href="{{route('category',['x'=>'1','k'=>'Układy scalone'])}}">
                    <div class="categoryBox">
                        <i class="fas fa-microchip fa-3x"></i>
                        <div class="categoryName">Układy Scalone</div>
                    </div>
                    </a>
                </div>
            </div>
        </div>
        <a href="{{route('addproduct')}}"> <button type="button" class="btn btn-primary">Primary</button></a>
    </div>
</section>
<section id="lastAdvertisements" class="bg-light section-padding">



    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 text-center">
                <div class="heading mb-5">
                    <h3 class="section-title">Ostatnie Ogłoszenia</h3>
                    <h5 class="sub-title">Znajdź to co Cię interesuje</h5>
                </div>
            </div>

            @foreach($ads as $advert)
                <div class="col-12 col-sm-6 col-md-6 col-lg-4">
                    <div class="AdvertContentBox">
                        <figure class="figure mb-0">
                            <img src="{{asset('/storage/img/products/'.$advert->image)}}" class="img-fluid img-h-our1" alt="A generic square placeholder image with rounded corners in a figure.">
                        </figure>
                        <div class="advertContentDesciption p-3">
                            <h5 class="pt-1 pb-2 advertTitle"><a href="#">{{mb_strimwidth($advert->title,0,25,"...")}}</a></h5>
                            <p> {{mb_strimwidth($advert->description,0,30,"...")}}</p>
                            <ul class="list-inline">
                                <li class="list-inline-item p-1">
                                    <span class="far fa-calendar-alt pr-1 font-menu-color"></span>
                                    {{substr($advert->created_at,0,strrpos($advert->created_at,' '))}}
                                </li>
                                <li class="list-inline-item p-1">
                                    <span class="fas fa-user pr-1 font-menu-color"></span>
                                    {{$advert->user->username}}
                                </li>
                                <li class="list-inline-item p-1">
                                    <span class="fas fa-desktop pr-1 font-menu-color"></span>
                                    {{$advert->category->title}}
                                </li>
                            </ul>
                            <div class="listing-bottom clearfix pt-3 pb-2 border-top">
                                <a href="#" class="float-left w-50"><span class="fas fa-map-marker-alt font-menu-color pr-1"></span> Katowice</a>
                                <button type="submit" class="btn btn-primary" name="x" value="{{$advert->id}}">  Zobacz </button>
                            </div>
                        </div>
                    </div>
                </div>

            @endforeach
        </div>
    </div>
</section>

<x-footer/> <!-- STOPKA GRZESIA -->

<script src="{{ asset('js/app.js') }}" type="text/javascript"></script>


<!--<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
-->
</body>
</html>
