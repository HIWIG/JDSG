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
                  <a href="{{route('category',['x'=>'1','k'=>'Laptop'])}}"> <div class="categoryBox">
                        <i class="fas fa-laptop fa-3x"></i>
                        <div class="categoryName">Laptopy</div>
                    </div>
                  </a>
                    <div class="categoryBox">
                        <i class="fas fa-desktop fa-3x"></i>
                        <div class="categoryName">Monitory</div>
                    </div>
                    <div class="categoryBox">
                        <i class="far fa-keyboard  fa-3x"></i>
                        <div class="categoryName">Klawiatury</div>
                    </div>
                    <div class="categoryBox">
                        <i class="fas fa-headphones fa-3x"></i>
                        <div class="categoryName">Słuchawki</div>
                    </div>
                    <div class="categoryBox">
                        <i class="fas fa-mouse fa-3x"></i>
                        <div class="categoryName">Myszki</div>
                    </div>
                    <div class="categoryBox">
                        <i class="fas fa-mobile-alt fa-3x"></i>
                        <div class="categoryName">Telefony</div>
                    </div>
                    <div class="categoryBox">
                        <i class="fas fa-hdd fa-3x"></i>
                        <div class="categoryName">Dyski</div>
                    </div>
                    <div class="categoryBox">
                        <i class="fas fa-memory fa-3x"></i>
                        <div class="categoryName">Podzespoły komputerowe</div>
                    </div>
                    <div class="categoryBox">
                        <i class="fas fa-gamepad fa-3x"></i>
                        <div class="categoryName">Konsole</div>
                    </div>
                    <div class="categoryBox">
                        <i class="fas fa-microchip fa-3x"></i>
                        <div class="categoryName">Układy Scalone</div>
                    </div>
                </div>
            </div>
        </div>
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
            <div class="col-12 col-sm-6 col-md-6 col-lg-4">
                <div class="AdvertContentBox">
                    <figure class="figure mb-0">
                        <img src="img/example.jpeg" class="img-fluid img-h-our1" alt="A generic square placeholder image with rounded corners in a figure.">
                    </figure>
                    <div class="advertContentDesciption p-3">
                        <h5 class="pt-1 pb-2 advertTitle"><a href="#">Acer Nitro XF252QXBMIIPRZX</a></h5>
                        <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut iaculis quis sapien non lobortis.</p>
                        <ul class="list-inline">
                            <li class="list-inline-item p-1">
                                <span class="far fa-calendar-alt pr-1 font-menu-color"></span>
                                20-11-2020
                            </li>
                            <li class="list-inline-item p-1">
                                <span class="fas fa-user pr-1 font-menu-color"></span>
                                Jhoczi
                            </li>
                            <li class="list-inline-item p-1">
                                <span class="fas fa-desktop pr-1 font-menu-color"></span>
                                Monitory
                            </li>
                        </ul>
                        <div class="listing-bottom clearfix pt-3 pb-2 border-top">
                            <a href="#" class="float-left w-50"><span class="fas fa-map-marker-alt font-menu-color pr-1"></span> Katowice</a>
                            <a href="#" class="float-right w-50 text-right">Zobacz więcej</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-12 col-sm-6 col-md-6 col-lg-4">
                <div class="AdvertContentBox">
                    <figure class="figure mb-0">
                        <img src="img/img5.jpg" class="img-fluid img-h-our1" alt="A generic square placeholder image with rounded corners in a figure.">
                    </figure>
                    <div class="advertContentDesciption p-3">
                        <h5 class="pt-1 pb-2 advertTitle"><a href="#">Telefon XYZZ 528CC2 </a></h5>
                        <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut iaculis quis sapien non lobortis.</p>
                        <ul class="list-inline">
                            <li class="list-inline-item p-1">
                                <span class="far fa-calendar-alt pr-1 font-menu-color"></span>
                                22-11-2020
                            </li>
                            <li class="list-inline-item p-1">
                                <span class="fas fa-user pr-1 font-menu-color"></span>
                                AKawi
                            </li>
                            <li class="list-inline-item p-1">
                                <span class="fas fa-mobile-alt pr-1 font-menu-color"></span>
                                Telefony
                            </li>
                        </ul>
                        <div class="listing-bottom clearfix pt-3 pb-2 border-top">
                            <a href="#" class="float-left w-50"><span class="fas fa-map-marker-alt font-menu-color pr-1"></span> Katowice</a>
                            <a href="#" class="float-right w-50 text-right">Zobacz więcej</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-12 col-sm-6 col-md-6 col-lg-4">
                <div class="AdvertContentBox">
                    <figure class="figure mb-0">
                        <img src="img/img4.png" height="300" class="img-fluid img-h-our1" alt="A generic square placeholder image with rounded corners in a figure.">
                    </figure>
                    <div class="advertContentDesciption p-3">
                        <h5 class="pt-1 pb-2 advertTitle"><a href="#">Laptop Xyby 55AC2</a></h5>
                        <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut iaculis quis sapien non lobortis.</p>
                        <ul class="list-inline">
                            <li class="list-inline-item p-1">
                                <span class="far fa-calendar-alt pr-1 font-menu-color"></span>
                                28-11-2020
                            </li>
                            <li class="list-inline-item p-1">
                                <span class="fas fa-user pr-1 font-menu-color"></span>
                                Esper
                            </li>
                            <li class="list-inline-item p-1">
                                <span class="fas fa-laptop pr-1 font-menu-color"></span>
                                Laptopy
                            </li>
                        </ul>
                        <div class="listing-bottom clearfix pt-3 pb-2 border-top">
                            <a href="#" class="float-left w-50"><span class="fas fa-map-marker-alt font-menu-color pr-1"></span> Katowice</a>
                            <a href="#" class="float-right w-50 text-right">Zobacz więcej</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-12 col-sm-6 col-md-6 col-lg-4">
                <div class="AdvertContentBox">
                    <figure class="figure mb-0">
                        <img src="img/example.jpeg" class="img-fluid img-h-our1" alt="A generic square placeholder image with rounded corners in a figure.">
                    </figure>
                    <div class="advertContentDesciption p-3">
                        <h5 class="pt-1 pb-2 advertTitle"><a href="#">Acer Nitro XF252QXBMIIPRZX czarny </a></h5>
                        <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut iaculis quis sapien non lobortis.</p>
                        <ul class="list-inline">
                            <li class="list-inline-item p-1">
                                <span class="far fa-calendar-alt pr-1 font-menu-color"></span>
                                20-11-2020
                            </li>
                            <li class="list-inline-item p-1">
                                <span class="fas fa-user pr-1 font-menu-color"></span>
                                Jhoczi
                            </li>
                            <li class="list-inline-item p-1">
                                <span class="fas fa-desktop pr-1 font-menu-color"></span>
                                Monitory
                            </li>
                        </ul>
                        <div class="listing-bottom clearfix pt-3 pb-2 border-top">
                            <a href="#" class="float-left w-50"><span class="fas fa-map-marker-alt font-menu-color pr-1"></span> Katowice</a>
                            <a href="#" class="float-right w-50 text-right">Zobacz więcej</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-12 col-sm-6 col-md-6 col-lg-4">
                <div class="AdvertContentBox">
                    <figure class="figure mb-0">
                        <img src="img/example.jpeg" class="img-fluid img-h-our1" alt="A generic square placeholder image with rounded corners in a figure.">
                    </figure>
                    <div class="advertContentDesciption p-3">
                        <h5 class="pt-1 pb-2 advertTitle"><a href="#">Acer Nitro XF252QXBMIIPRZX czarny </a></h5>
                        <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut iaculis quis sapien non lobortis.</p>
                        <ul class="list-inline">
                            <li class="list-inline-item p-1">
                                <span class="far fa-calendar-alt pr-1 font-menu-color"></span>
                                20-11-2020
                            </li>
                            <li class="list-inline-item p-1">
                                <span class="fas fa-user pr-1 font-menu-color"></span>
                                Jhoczi
                            </li>
                            <li class="list-inline-item p-1">
                                <span class="fas fa-desktop pr-1 font-menu-color"></span>
                                Monitory
                            </li>
                        </ul>
                        <div class="listing-bottom clearfix pt-3 pb-2 border-top">
                            <a href="#" class="float-left w-50"><span class="fas fa-map-marker-alt font-menu-color pr-1"></span> Katowice</a>
                            <a href="#" class="float-right w-50 text-right">Zobacz więcej</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-12 col-sm-6 col-md-6 col-lg-4">
                <div class="AdvertContentBox">
                    <figure class="figure mb-0">
                        <img src="img/example.jpeg" class="img-fluid img-h-our1" alt="A generic square placeholder image with rounded corners in a figure.">
                    </figure>
                    <div class="advertContentDesciption p-3">
                        <h5 class="pt-1 pb-2 advertTitle"><a href="#">Acer Nitro XF252QXBMIIPRZX czarny </a></h5>
                        <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut iaculis quis sapien non lobortis.</p>
                        <ul class="list-inline">
                            <li class="list-inline-item p-1">
                                <span class="far fa-calendar-alt pr-1 font-menu-color"></span>
                                20-11-2020
                            </li>
                            <li class="list-inline-item p-1">
                                <i class="fas fa-user pr-1 font-menu-color"></i>
                                Jhoczi2
                            </li>
                            <li class="list-inline-item p-1">
                                <span class="fas fa-desktop pr-1 font-menu-color"></span>
                                Monitory
                            </li>
                        </ul>
                        <div class="listing-bottom clearfix pt-3 pb-2 border-top">
                            <a href="#" class="float-left w-50"><span class="fas fa-map-marker-alt font-menu-color pr-1"></span> Katowice</a>
                            <a href="#" class="float-right w-50 text-right">Zobacz więcej</a>
                        </div>
                    </div>
                </div>
            </div>

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
