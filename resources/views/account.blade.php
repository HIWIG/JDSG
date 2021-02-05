<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

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
<section>
    <div class="section-padding bg-light">
        <div class="container">
            <div class="ad-info row ">

                <div class="col-lg-8  col-12 ">

                    <div class="wrapper shadow-sm p-5 mt-3 bg-white rounded ">
                        <h4>Tytuł ogłoszenia</h4>

                        <div id="carouselExampleIndicators" class="carousel slide"  data-ride="carousel">
                            <ol class="carousel-indicators">
                                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                            </ol>
                            <div class="carousel-inner height-600 img-center">
                                <div class="carousel-item active">
                                    <img src="img/example.jpeg" class="d-block w-100 height-auto  mx-auto"  alt="1">
                                </div>
                                <div class="carousel-item">
                                    <img src="img/1576204927_maxresdefault_9_story.jpg" class="d-block w-100 height-auto  mx-auto"  alt="2">
                                </div>
                                <div class="carousel-item">
                                    <img src="img/Komputer-do-Gier-Intel-i5-GTX-1050Ti-8GB-Win-10.jpg" class="d-block w-100 height-auto  mx-auto"  alt="3">
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
                        <div class="ad-title pb-5">

                            <p class="font-weight-bold ad-font-color">Price</p>
                            Opis
                            <br>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                        </div>
                        <div class="tags">

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
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-12 ">
                    <div class="seller-info shadow-sm p-5 mt-3  bg-white rounded">
                        <h4>Dane sprzedawcy</h4>

                        <!--                    <div class="photo"></div>-->
                        <b>Name Surname</b>
                        <br>
                        <i class="fas fa-phone"></i> 123 456 789
                        <br>
                        <i class="fas fa-map-marker-alt"></i> Bielsko-Biała
                        <br>
                        <a href="">Wszystkie produkty</a>

                    </div>
                </div>



                <div class="col-lg-12 col-md-6 col-12 ">
                    <div class="bottom-info p-5 shadow-sm mt-3 bg-white rounded">
                        <h4>Podobne przedmioty</h4>
                        <div class="other-products row ">
                            <div class="col-lg-4 col-12 shadow-sm rounded p-3 row">
                                <div class="col-6">
                                    <a href="" class="link">
                                        <img src="img/1576204927_maxresdefault_9_story.jpg" class="other-photo" alt="">
                                    </a>
                                </div>
                                <div class="col-6 pl-3">
                                    <a href="" class="link">

                                        <p class="font-weight-bold">Title</p>
                                        Price
                                    </a>

                                </div>
                            </div>

                            <div class="col-lg-4 col-12 shadow-sm rounded p-3 row">
                                <div class="col-6">
                                    <a href="" class="link">
                                        <img src="img/1576204927_maxresdefault_9_story.jpg" class="other-photo" alt="">
                                    </a>
                                </div>
                                <div class="col-6 pl-3">
                                    <a href="" class="link">

                                        <p class="font-weight-bold">Title</p>
                                        Price
                                    </a>

                                </div>
                            </div>
                            <div class="col-lg-4 col-12 shadow-sm rounded p-3 row">
                                <div class="col-6">
                                    <a href="" class="link">
                                        <img src="img/1576204927_maxresdefault_9_story.jpg" class="other-photo" alt="">
                                    </a>
                                </div>
                                <div class="col-6 pl-3">
                                    <a href="" class="link">

                                        <p class="font-weight-bold ">Title</p>
                                        Price
                                    </a>

                                </div>
                            </div>
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

