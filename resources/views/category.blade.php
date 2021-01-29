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








<section id="newsletter" class="section-padding">
    <div class="container">
        <div>
            <h2 class="w-100"><span class="fas fa-location-arrow mr-3 font-menu-color"></span>Bądź na bieżąco</h2>
            <h6 class="pl-5 mb-4">Otrzymuj powiadomienia o nowych najciekawszych powiadomieniach</h6>
            <form class="form-inline">
                <input type="text" class="form-control mb-1 mr-3 p-4 w-60 myCircle" id="newsletterInput" placeholder="Podaj swój adres email">
                <button class="btn btn-primary btn-lg w-35 myCircle f-16">Zapisz mnie</button>
            </form>
        </div>
    </div>
</section>


<footer>
    <section class="footer-content">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-6 col-12">

                    <div class="footerLogo">
                        <img src="img/logojdsg.svg" height="40%" width="40%">
                    </div>
                    <div class="footerDescription">
                        Description Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                    </div>
                    <ul class="mt-3 footer-socials">
                        <li>
                            <a class="fab"><span class="fab fa-facebook-f p-2 rounded-icon"></span></a>

                        </li>
                        <li>
                            <a class="fab" href="#" >
                                <span class="fab fa-youtube p-2 rounded-icon"></span>

                            </a>
                        </li>
                        <li>
                            <a class="fab" href="#">
                                <span class="fab fa-twitter p-2 rounded-icon"></span>

                            </a>
                        </li>
                        <li>
                            <a class="fab" href="#">
                                <span class="fab fa-instagram p-2 rounded-icon"></span>

                            </a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-4 col-12">
                    <h2 class="block-title">Linki</h2>
                    <ul class="links-menu ">
                        <li>
                            <a href="#">- Link 1</a>
                        </li>
                        <li>
                            <a href="#">- Link 2</a>
                        </li>
                        <li>
                            <a href="#">- Link 3</a>
                        </li>
                        <li>
                            <a href="#">- Link 4</a>
                        </li>
                        <li>
                            <a href="#">- Link 5</a>
                        </li>
                        <li>
                            <a href="#">- Link 6</a>
                        </li>
                        <li>
                            <a href="#">- Link 7</a>
                        </li>
                        <li>
                            <a href="#">- Link 8</a>
                        </li>
                        <li>
                            <a href="#">- Link 9</a>
                        </li>
                        <li>
                            <a href="#">- Link 10</a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-4 col-sm-6 col-12">
                    <div class="widget">
                        <h2 class="block-title">
                            Contact
                        </h2>
                        <ul class="footer-contact list-unstyled">
                            <li>
                                <strong>
                                    <i class="fas fa-phone"></i>
                                </strong>
                                <span>+48 123 456 789
                                <br>
                                +48 987 654 321
                                </span>
                            </li>
                            <li>
                                <strong>
                                    <i class="far fa-envelope"></i>
                                </strong>
                                <span>email@email.com
                                <br>
                                email2@email.com
                                </span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

    </section>
    <div id="footerCopyright">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="footer-info text-center">
                        <p class="text-center">
                            Designed by JDSG Team
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>

<!-- JS -->
<script src="js/jquery.js" type="text/javascript"></script>
<!--<script src="js/popper.min.js" type="text/javascript"></script>-->
<script src="js/bootstrap.bundle.min.js" type="text/javascript"></script>

<!--<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
--><!-- NASZ JS -->
<script defer src="js/EventFunctions.js" type="text/javascript"></script>
</body>
</html>

</body>
