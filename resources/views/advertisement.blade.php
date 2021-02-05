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

{{--<footer>--}}
{{--    <section class="footer-content">--}}
{{--        <div class="container">--}}
{{--            <div class="row">--}}
{{--                <div class="col-md-4 col-sm-6 col-12">--}}

{{--                    <div class="footerLogo">--}}
{{--                        <img src="img/logojdsg.svg" height="40%" width="40%">--}}
{{--                    </div>--}}
{{--                    <div class="footerDescription">--}}
{{--                        Description Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.--}}
{{--                    </div>--}}
{{--                    <ul class="mt-3 footer-socials">--}}
{{--                        <li>--}}
{{--                            <a class="fab"><span class="fab fa-facebook-f p-2 rounded-icon"></span></a>--}}

{{--                        </li>--}}
{{--                        <li>--}}
{{--                            <a class="fab" href="#" >--}}
{{--                                <span class="fab fa-youtube p-2 rounded-icon"></span>--}}

{{--                            </a>--}}
{{--                        </li>--}}
{{--                        <li>--}}
{{--                            <a class="fab" href="#">--}}
{{--                                <span class="fab fa-twitter p-2 rounded-icon"></span>--}}

{{--                            </a>--}}
{{--                        </li>--}}
{{--                        <li>--}}
{{--                            <a class="fab" href="#">--}}
{{--                                <span class="fab fa-instagram p-2 rounded-icon"></span>--}}

{{--                            </a>--}}
{{--                        </li>--}}
{{--                    </ul>--}}
{{--                </div>--}}
{{--                <div class="col-md-4 col-12">--}}
{{--                    <h2 class="block-title">Linki</h2>--}}
{{--                    <ul class="links-menu ">--}}
{{--                        <li>--}}
{{--                            <a href="#">- Link 1</a>--}}
{{--                        </li>--}}
{{--                        <li>--}}
{{--                            <a href="#">- Link 2</a>--}}
{{--                        </li>--}}
{{--                        <li>--}}
{{--                            <a href="#">- Link 3</a>--}}
{{--                        </li>--}}
{{--                        <li>--}}
{{--                            <a href="#">- Link 4</a>--}}
{{--                        </li>--}}
{{--                        <li>--}}
{{--                            <a href="#">- Link 5</a>--}}
{{--                        </li>--}}
{{--                        <li>--}}
{{--                            <a href="#">- Link 6</a>--}}
{{--                        </li>--}}
{{--                        <li>--}}
{{--                            <a href="#">- Link 7</a>--}}
{{--                        </li>--}}
{{--                        <li>--}}
{{--                            <a href="#">- Link 8</a>--}}
{{--                        </li>--}}
{{--                        <li>--}}
{{--                            <a href="#">- Link 9</a>--}}
{{--                        </li>--}}
{{--                        <li>--}}
{{--                            <a href="#">- Link 10</a>--}}
{{--                        </li>--}}
{{--                    </ul>--}}
{{--                </div>--}}
{{--                <div class="col-md-4 col-sm-6 col-12">--}}
{{--                    <div class="widget">--}}
{{--                        <h2 class="block-title">--}}
{{--                            Contact--}}
{{--                        </h2>--}}
{{--                        <ul class="footer-contact list-unstyled">--}}
{{--                            <li>--}}
{{--                                <strong>--}}
{{--                                    <i class="fas fa-phone"></i>--}}
{{--                                </strong>--}}
{{--                                <span>+48 123 456 789--}}
{{--                                <br>--}}
{{--                                +48 987 654 321--}}
{{--                                </span>--}}
{{--                            </li>--}}
{{--                            <li>--}}
{{--                                <strong>--}}
{{--                                    <i class="far fa-envelope"></i>--}}
{{--                                </strong>--}}
{{--                                <span>email@email.com--}}
{{--                                <br>--}}
{{--                                email2@email.com--}}
{{--                                </span>--}}
{{--                            </li>--}}
{{--                        </ul>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}

{{--    </section>--}}
{{--    <div id="footerCopyright">--}}
{{--        <div class="container">--}}
{{--            <div class="row">--}}
{{--                <div class="col-12">--}}
{{--                    <div class="footer-info text-center">--}}
{{--                        <p class="text-center">--}}
{{--                            Designed by JDSG Team--}}
{{--                        </p>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</footer>--}}

<x-footer/>

<script src="{{ asset('js/app.js') }}" type="text/javascript"></script>


{{--<script src="js/jquery.js" type="text/javascript"></script>--}}

{{--<script src="js/bootstrap.bundle.min.js" type="text/javascript"></script>--}}

</body>
</html>
