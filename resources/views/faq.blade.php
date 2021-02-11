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
                <x-search-bar/>

            </div>
        </div>
    </div>
</section>
<section id="FAQ" class="bg-light section-padding">
    <div class="container">
        <div>
            <h3 class="w-100 ml-4 "> Frequently Asked Question</h3>

            <div>
                <div id="accordion" >
                    <div class="panel black-link">
                        <div class="card-header" >
                            <h5 class="mb-0">
                                <button class="btn btn-link black-link " data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                    W jaki sposób dodać ogłoszenie ?
                                </button>
                            </h5>
                        </div>
                        <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                            <div class="card-body">
                                Ogłoszenie może dodać tylko zarejestrowany użytkownik. Ogłoszenie dodawane jest za pomocą przycisku znajdującego się koło rejestracji, a następnie postępując zgodnie z instrukcją.
                            </div>

                        </div>

                    </div>
                    <div class="panel black-link ">
                        <div class="card-header" >
                            <h5 class="mb-0">
                                <button class="btn btn-link black-link " data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    W jaki sposób założyć konto ?
                                </button>
                            </h5>
                        </div>
                        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                            <div class="card-body">
                                Konto zakłada się przez zakładkę rejestracji/logowania, gdzie należy podać imie,nazwisko,e-mail oraz hasło.
                            </div>

                        </div>

                    </div>
                    <div class="panel black-link">
                        <div class="card-header" >
                            <h5 class="mb-0">
                                <button class="btn btn-link black-link " data-toggle="collapse" data-target="#collapseTree" aria-expanded="false" aria-controls="collapseTree">
                                    Czy będę otrzymywać powiadomienia o sprzedanych przedmiotach ?
                                </button>
                            </h5>
                        </div>
                        <div id="collapseTree" class="collapse" aria-labelledby="headingTree" data-parent="#accordion">
                            <div class="card-body">
                                Tak, powiadomienia będą wysyłane na podany e-mail podczas rejestracji.
                            </div>

                        </div>

                    </div>
                    <div class="panel black-link">
                        <div class="card-header" >
                            <h5 class="mb-0">
                                <button class="btn btn-link black-link " data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                    Zapytanie 4
                                </button>
                            </h5>
                        </div>
                        <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordion">
                            <div class="card-body">
                                Odpowiedz 4
                            </div>

                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>
</section>
<section id="newsletter" class="section-padding">
    <div class="container">
        <div>
            <h2 class="w-100"><span class="fas fa-location-arrow mr-3 font-menu-color"></span>Bądź na bieżąco</h2>
            <h6 class="ml-5">Otrzymuj powiadomienia o nowych najciekawszych powiadomieniach.</h6>
            <form class="form-inline">
                <input type="text" class="form-control mb-1 mr-3 p-4 w-60 myCircle" id="newsletterInput" placeholder="Podaj swój adres email">
                <button class="btn btn-primary btn-lg w-35 myCircle f-16">Zapisz mnie</button>
            </form>
        </div>
    </div>
</section>


<x-footer/>

<script src="{{ asset('js/app.js') }}" type="text/javascript"></script>

</body>
</html>
