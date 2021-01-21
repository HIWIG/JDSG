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
                    <a href="{{ route('index')}}" class="nav-link f-white font-weight-bolder">Strona Główna</a>
                </li>
                <li class="nav-item mr-0 pt-2">
                    <a href="#" class="nav-link dropdown-toggle f-white font-weight-bolder" id="dropdownCategories" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Kategorie
                    </a>
                    <div class="dropdown-menu dropdown-margin" aria-labelledby="dropdownCategories">
                        <a class="dropdown-item" href="#">Laptopty</a>
                        <a class="dropdown-item" href="#">Monitory</a>
                        <a class="dropdown-item" href="#">Klawiatury</a>
                        <a class="dropdown-item" href="#">Słuchawki</a>
                        <a class="dropdown-item" href="#">Myszki</a>
                        <a class="dropdown-item" href="#">Telefony</a>
                        <a class="dropdown-item" href="#">Dyski</a>
                        <a class="dropdown-item" href="#">Podzespoły komputerowe</a>
                        <a class="dropdown-item" href="#">Konsole</a>
                        <a class="dropdown-item" href="#">Układy Scalone</a>
                    </div>
                </li>

                <li class="nav-item mr-0 pt-2">
                    <a href="#" class="nav-link dropdown-toggle f-white font-weight-bolder" id="dropdownSites" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Strony
                    </a>
                    <div class="dropdown-menu dropdown-margin" aria-labelledby="dropdownSites">
                        <a class="dropdown-item" href="#">Konto</a>
                        <a class="dropdown-item" href="#">Szukaj</a>
                        <a class="dropdown-item" href="#">Kontakt</a>
                        <a class="dropdown-item" href="#">FAQ</a>
                    </div>
                </li>
                <li class="nav-item mr-0 pt-2">
                    <a href="#" class="nav-link f-white font-weight-bolder">Kontakt</a>
                </li>
                <li class="nav-item mr-0 pt-2">
                    <a href="#" class="nav-link f-white font-weight-bolder">FAQ</a>
                </li>
                <li class="nav-item mr-0 pt-2">
                    @auth
                        <a href="{{ route('register')}}" class="nav-link d-inline-block f-white font-weight-bolder">
                            <i class="far fa-user"></i>
                            [NAZWA UZYTKOWNIKA]
                        </a>
                    @endauth
                    @guest
                        <a href="{{ route('register')}}" class="nav-link d-inline-block f-white font-weight-bolder">
                            <i class="far fa-user"></i>
                            Logowanie
                        </a>
                        |
                        <a href="{{ route('register')}}" class="nav-link d-inline-block f-white font-weight-bolder">
                            <i class="far fa-edit"></i>
                            Rejestracja
                        </a>
                    @endguest
                <li class="nav-item mr-0 pt-2">
                    <a href="#" class="btn btn-primary border-radius-20"><i class="fas fa-pen-square mr-1"></i>Dodaj Ogłoszenie</a>
                </li>
            </ul>
        </div>
    </div>
</div>
