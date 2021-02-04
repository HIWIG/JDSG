<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@1,500&display=swap" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">
    <!--TODO -->
    <!--Trzeba ogarnąć problem z sekcją z img background. Magiczny margines tam fruwa. Obstawiam że row może mieć cos z tym wspólnego.-->
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

<section id="categoryColumns">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-9 col-sm-12 row justify-content-center">


                <div class="product-filter">
                    <ul class="nav nav-tabs pull-right d-none d-sm-flex">
                        <li class="nav-item">
                            <a class="nav-link active " data-toggle="tab" href="#grid-view" onclick="gridview()"><i class="fas fa-th-large"></i>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#list-view" onclick="listview()"><i class="fas fa-list"></i>
                            </a>
                        </li>
                    </ul>
                </div>



                <div id="gridview" class="col-12  row justify-content-center">
                    <div class="col-12 col-sm-6 col-md-6 col-lg-6">
                        <div class="AdvertContentBox">
                            <figure class="figure mb-0">
                                <img src="img/example.jpeg" class="img-fluid img-h-our1" alt="A generic square placeholder image with rounded corners in a figure.">
                            </figure>
                            <div class="advertContentDesciption p-3">

                                <h5 class="pt-1 pb-2 advertTitle"><a href="#">

                                        @foreach($ad as $advert)
                                            {{$advert->title}}
                                        @endforeach

                                        </a></h5>
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

                    <div class="col-12 col-sm-6 col-md-6 col-lg-6">
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

                    <div class="col-12 col-sm-6 col-md-6 col-lg-6">
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

                    <div class="col-12 col-sm-6 col-md-6 col-lg-6">
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
                </div>
                <div id="listview" class="col-12  row justify-content-center">
                    <div class="col-12 row justify-content-center">
                        <div class="AdvertContentBox row justify-content-center">
                            <div class="col-4">
                                <figure class="figure mb-0">
                                    <img src="img/example.jpeg" class="img-fluid img-h-our1" alt="A generic square placeholder image with rounded corners in a figure.">
                                </figure>
                            </div>
                            <div class="col-8">
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
                    </div>
                    <div class="col-12 row justify-content-center">
                        <div class="AdvertContentBox row justify-content-center">
                            <div class="col-4">
                                <figure class="figure mb-0">
                                    <img src="img/example.jpeg" class="img-fluid img-h-our1" alt="A generic square placeholder image with rounded corners in a figure.">
                                </figure>
                            </div>
                            <div class="col-8">
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
                    </div>

                    <div class="col-12 row justify-content-center">
                        <div class="AdvertContentBox row justify-content-center">
                            <div class="col-4">
                                <figure class="figure mb-0">
                                    <img src="img/example.jpeg" class="img-fluid img-h-our1" alt="A generic square placeholder image with rounded corners in a figure.">
                                </figure>
                            </div>
                            <div class="col-8">
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
                    </div>

                    <div class="col-12 row justify-content-center">
                        <div class="AdvertContentBox row justify-content-center">
                            <div class="col-4">
                                <figure class="figure mb-0">
                                    <img src="img/example.jpeg" class="img-fluid img-h-our1" alt="A generic square placeholder image with rounded corners in a figure.">
                                </figure>
                            </div>
                            <div class="col-8">
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
                    </div>

                </div>





                <script>
                    function gridview(){
                        var view=document.getElementById("gridview");
                        var notview=document.getElementById("listview");
                        notview.style.display="none";
                        view.style.display="flex";
                    }
                    function listview(){
                        var notview=document.getElementById("gridview");
                        var view=document.getElementById("listview");
                        notview.style.display="none";
                        view.style.display="flex";
                    }
                </script>





            </div>
            <div class="col-md-3 col-sm-12">
                <div class="catTable">
                    <h4>Kategorie:</h4>
                    <ul class="catList">
                        <a href="#"><li>Laptopy<div class="pull-right">(5)</div> </li></a>
                        <a href="#"><li>Monitory<div class="pull-right">(5)</div></li></a>
                        <a href="#"><li>Klawiatury<div class="pull-right">(5)</div></li></a>
                        <a href="#"><li>Słuchawki<div class="pull-right">(5)</div></li></a>
                        <a href="#"><li>Myszki<div class="pull-right">(5)</div></li></a>
                        <a href="#"><li>Telefony<div class="pull-right">(5)</div></li></a>
                        <a href="#"><li>Dyski<div class="pull-right">(5)</div></li></a>
                        <a href="#"><li>Podzespoły komputerowe<div class="pull-right">(5)</div></li></a>
                        <a href="#"><li>Konsole<div class="pull-right">(5)</div></li></a>
                        <a href="#"><li>Placeholder<div class="pull-right">(5)</div></li></a>
                    </ul>
                </div>

            </div>

        </div>
    </div>
</section>





<x-footer/> <!-- STOPKA GRZESIA -->

<script src="{{ asset('js/app.js') }}" type="text/javascript"></script>
</body>
</html>

