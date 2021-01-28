<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@1,500&display=swap" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/fontawsome/css/all.css">
    <link rel="stylesheet" type="text/css" href="css/main-style.css">
    <!--TODO -->
    <!--Trzeba ogarnąć problem z sekcją z img background. Magiczny margines tam fruwa. Obstawiam że row może mieć cos z tym wspólnego.-->
</head>
<body>

<header id="header-wrapper">
    <!-- Modal -->
    <div class="modal fade bg-ourcolor1" id="menuModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div id="hidden-nav-menu" class="hidden-nav-user main-content-color-reverse text-black-50">
            <div class="modal-dialog m-0 mw-100" role="document">
                <div class="modal-content">
                    <div class=" pt-3 pb-4 pl-4 h5 text-center title-hidden-nav f-lightblack">
                        Menu
                        <span class="fas fa-times float-right pr-3 font-menu-color" data-dismiss="modal" aria-label="Close"></span>
                    </div>
                    <div class="">
                        <ul class="list-group main-content-color-revers navbar-font-ul ">
                            <li class="list-group-item text-white text-center">
                                <p class="myHr mt-3">Twoje konto</p>
                                <button type="submit" class="btn btn-primary mt-2 mb-3 w-75 border-radius-20 box-shadow-black">Zaloguj się</button>
                                <p class="myHr"> Nie masz konta? </p>
                                <button type="submit" class="btn btn-primary mt-2 mb-3 w-75 border-radius-20 box-shadow-black">Utwórz konto</button>
                            </li>
                            <li class="list-group-item pb-2 li-hidden-nav border-bottom"><a href="#" class="f-lightblack"><span class="fas fa-home mr-3 navbar-icon font-menu-color"></span>Strona Główna</a></li>
                            <li class="list-group-item pb-2 li-hidden-nav "><a href="#" class="f-lightblack" data-toggle="collapse" data-target="#collapseSites" aria-expanded="false" aria-controls="collapseSites"><span class="fas fa-columns mr-3 font-menu-color navbar-icon"></span>Strony</a></li>
                            <div class="collapse" id="collapseSites">
                                <div class="card card-body">
                                    <li class="list-group-item pb-2 li-hidden-nav border-top-0"><a href="user.html" class="f-lightblack">Konto</a></li>
                                    <li class="list-group-item pb-2 li-hidden-nav "><a href="category.html" class="f-lightblack">Szukaj</a></li>
                                    <li class="list-group-item pb-2 li-hidden-nav "><a href="contact.html" class="f-lightblack">Kontakt</a></li>
                                    <li class="list-group-item pb-2 li-hidden-nav "><a href="faq.html" class="f-lightblack">FAQ</a></li>
                                </div>
                            </div>
                            <li class="list-group-item pb-2 li-hidden-nav "><a href="#" class="f-lightblack" data-toggle="collapse" data-target="#collapseCategories" aria-expanded="false" aria-controls="collapseCategories"><span class="fas fa-list mr-3 font-menu-color navbar-icon"></span>Kategorie</a></li>
                            <div class="collapse" id="collapseCategories">
                                <div class="card card-body">
                                    <li class="list-group-item pb-2 li-hidden-nav border-top-0 "><a href="#" class="f-lightblack">Kateogira 1</a></li>
                                    <li class="list-group-item pb-2 li-hidden-nav "><a href="#" class="f-lightblack">Kategoria 2</a></li>
                                    <li class="list-group-item pb-2 li-hidden-nav "><a href="#" class="f-lightblack">Kategoria 3</a></li>
                                    <li class="list-group-item pb-2 li-hidden-nav "><a href="#" class="f-lightblack">Kategoria 4</a></li>
                                    <li class="list-group-item pb-2 li-hidden-nav "><a href="#" class="f-lightblack">Kategoria 5</a></li>
                                    <li class="list-group-item pb-2 li-hidden-nav "><a href="#" class="f-lightblack">Kategoria 6</a></li>
                                    <li class="list-group-item pb-2 li-hidden-nav "><a href="#" class="f-lightblack">Kategoria 7</a></li>
                                    <li class="list-group-item pb-2 li-hidden-nav "><a href="#" class="f-lightblack">Kategoria 8</a></li>
                                    <li class="list-group-item pb-2 li-hidden-nav "><a href="#" class="f-lightblack">Kategoria 9</a></li>
                                </div>
                            </div>
                            <li class="list-group-item pb-2 li-hidden-nav border-bottom"><a href="#" class="f-lightblack"><span class="fas fa-user mr-3 font-menu-color navbar-icon"></span>Twoje konto</a></li>
                            <li class="list-group-item pb-2 li-hidden-nav border-bottom"><a href="#" class="f-lightblack"><span class="fas fa-comments-dollar mr-3 font-menu-color navbar-icon"></span>Moje ogłoszenia</a></li>
                            <li class="list-group-item pb-2 li-hidden-nav border-bottom"><a href="#" class="f-lightblack"><span class="fas fa-cog mr-3 font-menu-color navbar-icon"></span>Ustawienia konta</a></li>
                            <li class="list-group-item pb-2 li-hidden-nav border-bottom"><a href="#" class="f-lightblack"><span class="fas fa-info-circle mr-3 font-menu-color navbar-icon"></span>Więcej</a></li>
                            <li class="list-group-item pb-2 li-hidden-nav border-bottom"><a href="#" class="f-lightblack"><span class="fas fa-id-card mr-3 font-menu-color navbar-icon"></span>Kontakt</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <nav class="navbar navbar-expand-lg navbar-light bg-light font-menu-color menu-container">
        <div class="container border-bottom main-header-tablet">
            <div class="clearfix">
                <ul class="nav nav-fill">
                    <li class="nav-item mr-0">
                        <div class="navbar-brand">
                            <a href="#"><img src="img/logojdsg.svg" width="110" height="50" class="d-inline-block align-top" alt="Our Logo"></a>
                        </div>
                    </li>
                    <li class="nav-item mr-0 pt-2">
                        <a href="#" class="nav-link">Strona Główna</a>
                    </li>
                    <li class="nav-item mr-0 pt-2">
                        <a href="#" class="nav-link dropdown-toggle ">Kategorie
                        </a>
                    </li>
                    <li class="nav-item mr-0 pt-2">
                        <a href="#" class="nav-link dropdown-toggle">Strony
                        </a>
                    </li>
                    <li class="nav-item mr-0 pt-2">
                        <a href="#" class="nav-link">Kontakt</a>
                    </li>
                    <li class="nav-item mr-0 pt-2">
                        <a href="#" class="nav-link">FAQ</a>
                    </li>
                    <li class="nav-item mr-0 pt-2">
                        <a href="#" class="nav-link d-inline-block">
                            <i class="far fa-user"></i>
                            Logowanie
                        </a>
                        |
                        <a href="#" class="nav-link d-inline-block">
                            <i class="far fa-edit"></i>
                            Rejestracja
                        </a>
                    <li class="nav-item mr-1 pt-2">
                        <a href="#" class="btn btn-primary border-radius-20"><i class="fas fa-pen-square mr-1"></i>Dodaj Ogłoszenie</a>
                    </li>
                </ul>
            </div>
        </div>

        <div class="w-100 mobile-menu">
            <div class=" pt-1">
                <div class="navbar-brand">
                    <img src="img/logojdsg.svg" width="110" height="50" class="d-inline-block align-top" alt="Our Logo">
                </div>

                <ul class="d-inline-block  float-right mobile-menu-ul">
                    <li class="list-inline-item pl-1 pr-2">
                        <div class="text-center icon-container">
                            <span class="fas fa-comments-dollar"></span>
                        </div>
                        <p class="icon-title">Moje ogłoszenia</p>
                    </li>
                    <li class="list-inline-item pl-1 pr-1">
                        <div class="text-center icon-container" data-toggle="modal" data-target="#menuModal">
                            <span class="fas fa-bars menuIcon"></span>
                        </div>
                        <p class="icon-title">Menu</p>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>
<section class="intro-section">
    <div id="intro-bg">
        <div class="overlay"></div>
        <div class="container pb-5">
            <div class="row justify-content-center">
                <!-- BEGIN THE HEADER SECTION -->
                <div class="col-md-12 pt-4  mb-5 text-white">
                    <div class="container border-bottom main-header">
                        <div class="clearfix">
                            <ul class="nav nav-fill">
                                <li class="nav-item mr-2 ">
                                    <div class="navbar-brand">
                                        <a href="#"><img src="img/logojdsg.svg" width="110" height="50" class="d-inline-block align-top" alt="Our Logo"></a>
                                    </div>
                                </li>
                                <li class="nav-item mr-0 pt-2 ">
                                    <a href="#" class="nav-link f-white font-weight-bolder">Strona Główna</a>
                                </li>
                                <li class="nav-item mr-0 pt-2">
                                    <a href="#" class="nav-link dropdown-toggle f-white font-weight-bolder" id="dropdownCategories" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Kategorie
                                    </a>
                                    <div class="dropdown-menu dropdown-margin" aria-labelledby="dropdownCategories">
                                        <a class="dropdown-item" href="#">Kategoria 1</a>
                                        <a class="dropdown-item" href="#">Kategoria 2</a>
                                        <a class="dropdown-item" href="#">Kategoria 3</a>
                                        <a class="dropdown-item" href="#">Kategoria 4</a>
                                        <a class="dropdown-item" href="#">Kategoria 5</a>
                                        <a class="dropdown-item" href="#">Kategoria 6</a>
                                        <a class="dropdown-item" href="#">Kategoria 7</a>
                                        <a class="dropdown-item" href="#">Kategoria 8</a>
                                        <a class="dropdown-item" href="#">Kategoria 9</a>
                                        <a class="dropdown-item" href="#">Kategoria 10</a>
                                        <a class="dropdown-item" href="#">Kategoria 11</a>
                                    </div>
                                </li>

                                <li class="nav-item mr-0 pt-2">
                                    <a href="#" class="nav-link dropdown-toggle f-white font-weight-bolder" id="dropdownSites" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Strony
                                    </a>
                                    <div class="dropdown-menu dropdown-margin" aria-labelledby="dropdownSites">
                                        <a class="dropdown-item" href="user.html">Konto</a>
                                        <a class="dropdown-item" href="category.html">Szukaj</a>
                                        <a class="dropdown-item" href="contact.html">Kontakt</a>
                                        <a class="dropdown-item" href="faq.html">FAQ</a>
                                    </div>
                                </li>
                                <li class="nav-item mr-0 pt-2">
                                    <a href="#" class="nav-link f-white font-weight-bolder">Kontakt</a>
                                </li>
                                <li class="nav-item mr-0 pt-2">
                                    <a href="#" class="nav-link f-white font-weight-bolder">FAQ</a>
                                </li>
                                <li class="nav-item mr-0 pt-2">
                                    <a href="#" class="nav-link d-inline-block f-white font-weight-bolder">
                                        <i class="far fa-user"></i>
                                        Logowanie
                                    </a>
                                    |
                                    <a href="#" class="nav-link d-inline-block f-white font-weight-bolder">
                                        <i class="far fa-edit"></i>
                                        Rejestracja
                                    </a>
                                <li class="nav-item mr-0 pt-2">
                                    <a href="#" class="btn btn-primary border-radius-20"><i class="fas fa-pen-square mr-1"></i>Dodaj Ogłoszenie</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 col-lg-9 col-12 text-center">
                    <div class="contents">
                        <div class="intro-title pt-1 pb-5">

                        </div>
                        <form class="mb-5">
                            <div class=" p-2 bg-light border-radius-40">
                                <div class="row justify-content-center">
                                    <div class="col-11 col-md-4">
                                        <input type="text" class="form-control mb-3 mt-2" id="exampleFormControlInput1" placeholder="Szukaj ogłoszeń">
                                    </div>
                                    <div class="col-6 col-md-4">
                                        <div class="select mb-3 mt-2">
                                            <select class="form-control " id="exampleFormControlSelect1">
                                                <option>Wybierz kategorię</option>
                                                <option>Kategoria 1</option>
                                                <option>Kategoria 2</option>
                                                <option>Kategoria 3</option>
                                                <option>Kategoria 4</option>
                                                <option>Kategoria 5</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-5 col-md-3 mt-2">
                                        <button class="btn btn-primary btn-block border-radius-20 mb-2"><i class="fas fa-search pr-3"></i>Szukaj</button>
                                    </div>
                                </div>

                            </div>
                        </form>
                        <!--
                                                <h5 class="pb-5 lh-35">Wyszukaj potrzebne ci rzeczy poprzez naszą <a class="" href="#">przeglądarkę ogłoszeń</a>.<br> Jeżeli masz przedmiot, którego chciałbyś się pozbyć załóż swoje własne <a class="" href="#">ogłoszenie</a>.<br><br>Tablica ogłoszeniowa <b class="f-ourcolor1">JDSG</b> to miejsce gdzie w prosty sposób znajdziesz to czego szukasz. </h5>
                        -->

                    </div>
                </div>
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
