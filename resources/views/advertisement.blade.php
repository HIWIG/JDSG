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

{{--<header id="header-wrapper">--}}
{{--    <!-- Modal -->--}}
{{--    <div class="modal fade bg-ourcolor1" id="menuModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">--}}
{{--        <div id="hidden-nav-menu" class="hidden-nav-user main-content-color-reverse text-black-50">--}}
{{--            <div class="modal-dialog m-0 mw-100" role="document">--}}
{{--                <div class="modal-content">--}}
{{--                    <div class=" pt-3 pb-4 pl-4 h5 text-center title-hidden-nav f-lightblack">--}}
{{--                        Menu--}}
{{--                        <span class="fas fa-times float-right pr-3 font-menu-color" data-dismiss="modal" aria-label="Close"></span>--}}
{{--                    </div>--}}
{{--                    <div class="">--}}
{{--                        <ul class="list-group main-content-color-revers navbar-font-ul ">--}}
{{--                            <li class="list-group-item text-white text-center">--}}
{{--                                <p class="myHr mt-3">Twoje konto</p>--}}
{{--                                <button type="submit" class="btn btn-primary mt-2 mb-3 w-75 border-radius-20 box-shadow-black">Zaloguj się</button>--}}
{{--                                <p class="myHr"> Nie masz konta? </p>--}}
{{--                                <button type="submit" class="btn btn-primary mt-2 mb-3 w-75 border-radius-20 box-shadow-black">Utwórz konto</button>--}}
{{--                            </li>--}}
{{--                            <li class="list-group-item pb-2 li-hidden-nav border-bottom"><a href="#" class="f-lightblack"><span class="fas fa-home mr-3 navbar-icon font-menu-color"></span>Strona Główna</a></li>--}}
{{--                            <li class="list-group-item pb-2 li-hidden-nav "><a href="#" class="f-lightblack" data-toggle="collapse" data-target="#collapseSites" aria-expanded="false" aria-controls="collapseSites"><span class="fas fa-columns mr-3 font-menu-color navbar-icon"></span>Strony</a></li>--}}
{{--                            <div class="collapse" id="collapseSites">--}}
{{--                                <div class="card card-body">--}}
{{--                                    <li class="list-group-item pb-2 li-hidden-nav border-top-0"><a href="user.html" class="f-lightblack">Konto</a></li>--}}
{{--                                    <li class="list-group-item pb-2 li-hidden-nav "><a href="category.html" class="f-lightblack">Szukaj</a></li>--}}
{{--                                    <li class="list-group-item pb-2 li-hidden-nav "><a href="contact.html" class="f-lightblack">Kontakt</a></li>--}}
{{--                                    <li class="list-group-item pb-2 li-hidden-nav "><a href="faq.html" class="f-lightblack">FAQ</a></li>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <li class="list-group-item pb-2 li-hidden-nav "><a href="#" class="f-lightblack" data-toggle="collapse" data-target="#collapseCategories" aria-expanded="false" aria-controls="collapseCategories"><span class="fas fa-list mr-3 font-menu-color navbar-icon"></span>Kategorie</a></li>--}}
{{--                            <div class="collapse" id="collapseCategories">--}}
{{--                                <div class="card card-body">--}}
{{--                                    <li class="list-group-item pb-2 li-hidden-nav border-top-0 "><a href="#" class="f-lightblack">Kateogira 1</a></li>--}}
{{--                                    <li class="list-group-item pb-2 li-hidden-nav "><a href="#" class="f-lightblack">Kategoria 2</a></li>--}}
{{--                                    <li class="list-group-item pb-2 li-hidden-nav "><a href="#" class="f-lightblack">Kategoria 3</a></li>--}}
{{--                                    <li class="list-group-item pb-2 li-hidden-nav "><a href="#" class="f-lightblack">Kategoria 4</a></li>--}}
{{--                                    <li class="list-group-item pb-2 li-hidden-nav "><a href="#" class="f-lightblack">Kategoria 5</a></li>--}}
{{--                                    <li class="list-group-item pb-2 li-hidden-nav "><a href="#" class="f-lightblack">Kategoria 6</a></li>--}}
{{--                                    <li class="list-group-item pb-2 li-hidden-nav "><a href="#" class="f-lightblack">Kategoria 7</a></li>--}}
{{--                                    <li class="list-group-item pb-2 li-hidden-nav "><a href="#" class="f-lightblack">Kategoria 8</a></li>--}}
{{--                                    <li class="list-group-item pb-2 li-hidden-nav "><a href="#" class="f-lightblack">Kategoria 9</a></li>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <li class="list-group-item pb-2 li-hidden-nav border-bottom"><a href="user.html" class="f-lightblack"><span class="fas fa-user mr-3 font-menu-color navbar-icon"></span>Twoje konto</a></li>--}}
{{--                            <li class="list-group-item pb-2 li-hidden-nav border-bottom"><a href="myAdvertisment.html" class="f-lightblack"><span class="fas fa-comments-dollar mr-3 font-menu-color navbar-icon"></span>Moje ogłoszenia</a></li>--}}
{{--                            <li class="list-group-item pb-2 li-hidden-nav border-bottom"><a href="settings.html" class="f-lightblack"><span class="fas fa-cog mr-3 font-menu-color navbar-icon"></span>Ustawienia konta</a></li>--}}
{{--                            <li class="list-group-item pb-2 li-hidden-nav border-bottom"><a href="more.html" class="f-lightblack"><span class="fas fa-info-circle mr-3 font-menu-color navbar-icon"></span>Więcej</a></li>--}}
{{--                            <li class="list-group-item pb-2 li-hidden-nav border-bottom"><a href="contact.html" class="f-lightblack"><span class="fas fa-id-card mr-3 font-menu-color navbar-icon"></span>Kontakt</a></li>--}}
{{--                        </ul>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--    <nav class="navbar navbar-expand-lg navbar-light bg-light font-menu-color menu-container">--}}
{{--        <div class="container border-bottom main-header-tablet">--}}
{{--            <div class="clearfix">--}}
{{--                <ul class="nav nav-fill">--}}
{{--                    <li class="nav-item mr-0">--}}
{{--                        <div class="navbar-brand">--}}
{{--                            <a href="#"><img src="img/logojdsg.svg" width="110" height="50" class="d-inline-block align-top" alt="Our Logo"></a>--}}
{{--                        </div>--}}
{{--                    </li>--}}
{{--                    <li class="nav-item mr-0 pt-2">--}}
{{--                        <a href="index.html" class="nav-link">Strona Główna</a>--}}
{{--                    </li>--}}
{{--                    <li class="nav-item mr-0 pt-2">--}}
{{--                        <a href="category.html" class="nav-link dropdown-toggle ">Kategorie--}}
{{--                        </a>--}}
{{--                    </li>--}}
{{--                    <li class="nav-item mr-0 pt-2">--}}
{{--                        <a href="#" class="nav-link dropdown-toggle">Strony--}}
{{--                        </a>--}}
{{--                    </li>--}}
{{--                    <li class="nav-item mr-0 pt-2">--}}
{{--                        <a href="contact.html" class="nav-link">Kontakt</a>--}}
{{--                    </li>--}}
{{--                    <li class="nav-item mr-0 pt-2">--}}
{{--                        <a href="faq.html" class="nav-link">FAQ</a>--}}
{{--                    </li>--}}
{{--                    <li class="nav-item mr-0 pt-2">--}}
{{--                        <a href="#" class="nav-link d-inline-block">--}}
{{--                            <i class="far fa-user"></i>--}}
{{--                            Logowanie--}}
{{--                        </a>--}}
{{--                        |--}}
{{--                        <a href="#" class="nav-link d-inline-block">--}}
{{--                            <i class="far fa-edit"></i>--}}
{{--                            Rejestracja--}}
{{--                        </a>--}}
{{--                    <li class="nav-item mr-1 pt-2">--}}
{{--                        <a href="#" class="btn btn-primary border-radius-20"><i class="fas fa-pen-square mr-1"></i>Dodaj Ogłoszenie</a>--}}
{{--                    </li>--}}
{{--                </ul>--}}
{{--            </div>--}}
{{--        </div>--}}

{{--        <div class="w-100 mobile-menu">--}}
{{--            <div class=" pt-1">--}}
{{--                <div class="navbar-brand">--}}
{{--                    <img src="img/logojdsg.svg" width="110" height="50" class="d-inline-block align-top" alt="Our Logo">--}}
{{--                </div>--}}

{{--                <ul class="d-inline-block  float-right mobile-menu-ul">--}}
{{--                    <li class="list-inline-item pl-1 pr-2">--}}
{{--                        <div class="text-center icon-container">--}}
{{--                            <span class="fas fa-comments-dollar"></span>--}}
{{--                        </div>--}}
{{--                        <p class="icon-title">Moje ogłoszenia</p>--}}
{{--                    </li>--}}
{{--                    <li class="list-inline-item pl-1 pr-1">--}}
{{--                        <div class="text-center icon-container" data-toggle="modal" data-target="#menuModal">--}}
{{--                            <span class="fas fa-bars menuIcon"></span>--}}
{{--                        </div>--}}
{{--                        <p class="icon-title">Menu</p>--}}
{{--                    </li>--}}
{{--                </ul>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </nav>--}}
{{--</header>--}}

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
