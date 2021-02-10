<header id="header-wrapper">
    <!-- Modal -->
    <div class="modal fade bg-ourcolor1" id="menuModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div id="hidden-nav-menu" class="hidden-nav-user main-content-color-reverse text-black-50">
            <div class="modal-dialog m-0 mw-100" role="document">
                <div class="modal-content">
                    <div class=" pt-3 pb-4 pl-4 h5 text-center title-hidden-nav f-lightblack">
                        Menu
                        <span class="fas fa-times float-right mr-3 font-menu-color" data-dismiss="modal" aria-label="Close"></span>
                    </div>
                    <div class="">
                        <ul class="list-group main-content-color-revers navbar-font-ul ">
                            @auth
                                <li class="list-group-item text-white text-center">
                                    <p class="myHr mt-3">Twoje konto</p>
                                    {{--<form action="{{ route('login')}}">
                                        <button type="submit" class="btn btn-primary mt-2 mb-3 w-75 border-radius-20 box-shadow-black">Zaloguj się</button>
                                    </form>--}}
                                    <div class="row text-dark">
                                        <div class="col-12">
                                            <img width="100" src="img/userimg.png" class="img-fluid  border border-primary br-circle" alt="User image">
                                        </div>
                                        <div class="col-12">
                                            {{auth()->user()->username }}
                                        </div>
                                    </div>
                                    <p class="myHr"> Wyloguj sie</p>
                                    <form action="{{route('logout')}}" method="post">
                                        @csrf
                                        <button type="submit" class="btn btn-primary mt-2 mb-3 w-75 border-radius-20 box-shadow-black">Wyloguj</button>
                                    </form>
                                </li>
                            @endauth
                            @guest
                                <li class="list-group-item text-white text-center">
                                    <p class="myHr mt-3">Twoje konto</p>
                                    <form action="{{ route('login')}}">
                                        <button type="submit" class="btn btn-primary mt-2 mb-3 w-75 border-radius-20 box-shadow-black">Zaloguj się</button>
                                    </form>
                                    <p class="myHr"> Nie masz konta?</p>
                                    <form action="{{route('register')}}">
                                        <button type="submit" class="btn btn-primary mt-2 mb-3 w-75 border-radius-20 box-shadow-black">Utwórz konto</button>
                                    </form>
                                </li>
                            @endguest
                            <li class="list-group-item pb-2 li-hidden-nav border-bottom"><a href="{{route('index')}}" class="f-lightblack"><span class="fas fa-home mr-3 navbar-icon font-menu-color"></span>Strona Główna</a></li>
                            <li class="list-group-item pb-2 li-hidden-nav "><a href="#" class="f-lightblack" data-toggle="collapse" data-target="#collapseCategories" aria-expanded="false" aria-controls="collapseCategories"><span class="fas fa-list mr-3 font-menu-color navbar-icon"></span>Kategorie</a></li>
                            <div class="collapse" id="collapseCategories">
                                <div class="card card-body">
                                    <li class="list-group-item pb-2 li-hidden-nav border-top-0 "><a href="#" class="f-lightblack">Laptopy</a></li>
                                    <li class="list-group-item pb-2 li-hidden-nav "><a href="#" class="f-lightblack">Monitory</a></li>
                                    <li class="list-group-item pb-2 li-hidden-nav "><a href="#" class="f-lightblack">Klawiatury</a></li>
                                    <li class="list-group-item pb-2 li-hidden-nav "><a href="#" class="f-lightblack">Słuchawki</a></li>
                                    <li class="list-group-item pb-2 li-hidden-nav "><a href="#" class="f-lightblack">Myszki</a></li>
                                    <li class="list-group-item pb-2 li-hidden-nav "><a href="#" class="f-lightblack">Telefony</a></li>
                                    <li class="list-group-item pb-2 li-hidden-nav "><a href="#" class="f-lightblack">Dyski</a></li>
                                    <li class="list-group-item pb-2 li-hidden-nav "><a href="#" class="f-lightblack">Podzespoły komputerowe</a></li>
                                    <li class="list-group-item pb-2 li-hidden-nav "><a href="#" class="f-lightblack">Konsole</a></li>
                                    <li class="list-group-item pb-2 li-hidden-nav "><a href="#" class="f-lightblack">Układy Scalone</a></li>
                                </div>
                            </div>
                                @auth
                                    <li class="list-group-item pb-2 li-hidden-nav border-bottom"><a href="user.html" class="f-lightblack"><span class="fas fa-user mr-3 font-menu-color navbar-icon"></span>Twoje konto</a></li>
                                    <li class="list-group-item pb-2 li-hidden-nav border-bottom"><a href="myAdvertisment.html" class="f-lightblack"><span class="fas fa-comments-dollar mr-3 font-menu-color navbar-icon"></span>Moje ogłoszenia</a></li>
                                    <li class="list-group-item pb-2 li-hidden-nav border-bottom"><a href="settings.html" class="f-lightblack"><span class="fas fa-cog mr-3 font-menu-color navbar-icon"></span>Ustawienia konta</a></li>
                                @endauth
                            <li class="list-group-item pb-2 li-hidden-nav border-bottom"><a href="more.html" class="f-lightblack"><span class="fas fa-info-circle mr-3 font-menu-color navbar-icon"></span>Więcej</a></li>
                            <li class="list-group-item pb-2 li-hidden-nav border-bottom"><a href="contact.html" class="f-lightblack"><span class="fas fa-id-card mr-3 font-menu-color navbar-icon"></span>Kontakt</a></li>
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
                        <a href="{{ route('index')}}" class="nav-link">Strona Główna</a>
                    </li>
                    <li class="nav-item mr-0 pt-2">
                        <a href="{{route('category')}}" class="nav-link dropdown-toggle ">Kategorie
                        </a>
                    </li>
                    <li class="nav-item mr-0 pt-2">
                        <a href="#" class="nav-link dropdown-toggle">Strony
                        </a>
                    </li>
                    <li class="nav-item mr-0 pt-2">
                        <a href="{{route('contact')}}" class="nav-link">Kontakt</a>
                    </li>
                    <li class="nav-item mr-0 pt-2">
                        <a href="{{route('faq')}}" class="nav-link">FAQ</a>
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
                    @auth
                        <li class="list-inline-item pl-1 pr-2">
                            <div class="text-center icon-container">
                                <span class="fas fa-comments-dollar"></span>
                            </div>
                            <p class="icon-title">Moje ogłoszenia</p>
                        </li>
                    @endauth
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
