<!-- BEGIN THE HEADER SECTION -->
<div class="col-md-12 pt-4  mb-5 text-white">
    <div class="container border-bottom main-header">
        <div class="clearfix">
            <ul class="nav nav-fill">
                <li class="nav-item mr-0 ">
                    <div class="navbar-brand">
                        <a href="{{route('index')}}"><img src="img/logojdsg.svg" width="110" height="50" class="d-inline-block align-top" alt="Our Logo"></a>
                    </div>
                </li>
                <li class="nav-item mr-0 pt-2 ">
                    <a href="{{ route('index')}}" class="nav-link f-white font-weight-bolder pl-0 pr-0">Strona Główna</a>
                </li>
                <li class="nav-item mr-0 pt-2">
                    <a href="#" class="nav-link dropdown-toggle f-white font-weight-bolder pl-0 pr-0" id="dropdownCategories" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Kategorie
                    </a>
                    <div class="dropdown-menu dropdown-margin" aria-labelledby="dropdownCategories">
                        <a class="dropdown-item" href="{{route('category',['x'=>'1','k'=>'Laptopy'])}}">Laptopty</a>
                        <a class="dropdown-item" href="{{route('category',['x'=>'1','k'=>'Monitory'])}}">Monitory</a>
                        <a class="dropdown-item" href="{{route('category',['x'=>'1','k'=>'Klawiatury'])}}">Klawiatury</a>
                        <a class="dropdown-item" href="{{route('category',['x'=>'1','k'=>'Słuchawki'])}}">Słuchawki</a>
                        <a class="dropdown-item" href="{{route('category',['x'=>'1','k'=>'Myszki'])}}">Myszki</a>
                        <a class="dropdown-item" href="{{route('category',['x'=>'1','k'=>'Telefony'])}}">Telefony</a>
                        <a class="dropdown-item" href="{{route('category',['x'=>'1','k'=>'Dyski'])}}">Dyski</a>
                        <a class="dropdown-item" href="{{route('category',['x'=>'1','k'=>'Podzespoły komputerowe'])}}">Podzespoły komputerowe</a>
                        <a class="dropdown-item" href="{{route('category',['x'=>'1','k'=>'Konsole'])}}">Konsole</a>
                        <a class="dropdown-item" href="{{route('category',['x'=>'1','k'=>'Układy scalone'])}}">Układy Scalone</a>
                    </div>
                </li>
                <li class="nav-item mr-0 pt-2">
                    <a href="{{route('contact')}}" class="nav-link f-white font-weight-bolder pl-0 pr-0">Kontakt</a>
                </li>
                <li class="nav-item mr-0 pt-2">
                    <a href="{{route('faq')}}" class="nav-link f-white font-weight-bolder pl-0 pr-0">FAQ</a>
                </li>
                <li class="nav-item mr-0 pt-2">
                    @auth
                        <a href="{{ route('account')}}" class="nav-link d-inline-block f-white font-weight-bolder pl-0 pr-0">
                            <i class="far fa-user mr-1"></i>
                            {{auth()->user()->username }}
                        </a>
                </li>
                <li class="nav-item mr-0 pt-2">

                        <form action="{{route('logout')}}" method="post">
                            @csrf
                            <button type="submit" id="logoutButton" class="bg-transparent border-0 nav-link d-inline-block f-white font-weight-bolder pl-0 pr-0">
                                <i class="fas fa-sign-out-alt"></i>
                                Wyloguj
                            </button>
                        </form>
                    @endauth
                    @guest
                        <a href="{{ route('login')}}" class="nav-link d-inline-block f-white font-weight-bolder pl-0 pr-0">
                            <i class="far fa-user"></i>
                            Logowanie
                        </a>
                        |
                        <a href="{{ route('register')}}" class="nav-link d-inline-block f-white font-weight-bolder pl-0 pr-0">
                            <i class="far fa-edit"></i>
                            Rejestracja
                        </a>
                    @endguest
                </li>
                <li class="nav-item mr-0 pt-2">
                    <a href="{{route('addproduct')}}" class="btn btn-primary border-radius-20"><i class="fas fa-pen-square mr-1"></i>Dodaj Ogłoszenie</a>
                </li>
            </ul>
        </div>
    </div>
</div>
