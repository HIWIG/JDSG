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
                <div class="col-md-12 col-lg-9 col-12 text-center mt-5">
                    <div class="contents">
                        <form class="mb-5">
                            <div class="row justify-content-center">
                                <div class="col-10 col-md-5 p-2 bg-light rounded mb-5">
                                    <h2 class="text-dark pt-2 pb-2"> Zaloguj się </h2>

                                    <div class="col-12 col-md-12">
                                        <input type="email" class="form-control" id="userLogin" aria-describedby="emailHelp" placeholder="Wprowadź email">
                                        <small id="emailHelp" class="form-text text-muted">Nie udostępniamy twojego adresu email nikomu.</small>
                                        <input type="password" class="form-control mt-2" id="userPassword" placeholder="Podaj hasło">
                                        <small id="passwordHelp" class="form-text text-muted"><a href="#">Nie pamiętasz hasła?</a></small>
                                    </div>
                                    <div class="col-12 col-md-12 mt-2">
                                        <button class="btn btn-primary btn-block border-radius-20 mb-2" id="logIn">Zaloguj się</button>
                                    </div>
                                    <small id="registerHelp" class="form-text text-muted" data-toggle="collapse" data-target="#registerCollapse" aria-expanded="false" aria-controls="registerCollapse"><a href="#">Nie masz konta?</a></small>
                                </div>
                                <!--collapse-->
                                <div class="col-0 col-md-2"></div>
                                <div class="col-10 col-md-5 p-2 bg-light rounded mb-5" id="registerCollapse">
                                    <div class=" col-11 col-md-12 mt-2" >
                                        <div class="">
                                            <h2 class="text-dark pt-2 pb-2">Załóż Konto</h2>
                                            <input type="email" class="form-control mb-3" id="newUserName" aria-describedby="emailHelp" placeholder="Imię (wymagane)">
                                            <input type="email" class="form-control mb-3" id="newUserSurname" aria-describedby="emailHelp" placeholder="Nazwisko (wymagane)">
                                            <input type="email" class="form-control mb-3" id="newUserMail" aria-describedby="emailHelp" placeholder="Email (wymagane)">
                                            <input type="email" class="form-control mb-3" id="newUserPassword" aria-describedby="emailHelp" placeholder="Haslo (wymagane)">
                                            <small id="newPasswordHelp" class="text-dark" >Hasło powinno składać się conajmniej z 8 znaków, jednej dużej litery oraz liczby.</small>

                                            <p class="text-dark pt-2 ml-4"><input class="form-check-input position-static mr-1" type="checkbox" id="jdsgRule" value="option1" aria-label="...">Akceptuje Regulamin serwisu JDSG</p>
                                            <button class="btn btn-primary btn-block border-radius-20 mb-2">Załóż Konto</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<x-footer/> <!-- STOPKA GRZESIA -->

<script src="{{ asset('js/app.js') }}" type="text/javascript"></script>

</body>
</html>
