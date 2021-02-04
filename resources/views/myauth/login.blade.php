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
                        <div class="mb-5">
                            <div class="row justify-content-center">
                                <div class="col-10 col-md-12 p-2 bg-light rounded mb-5">
                                    <form class="mb-5" action="{{ route('login') }}" method="post">
                                        @csrf
                                        <h2 class="text-dark pt-2 pb-2"> Zaloguj się </h2>
                                        @if (session('status'))
                                            <p class="text-dark">{{ session('status') }}</p>
                                        @endif
                                        <div class="col-12 col-md-12">
                                            <input type="email" class="form-control @error('email') border border-danger @enderror" id="email" name="email" aria-describedby="login" placeholder="Wprowadź email">
                                            <small id="emailHelp" class="form-text text-muted">Nie udostępniamy twojego adresu email nikomu.</small>
                                            <input type="password" class="form-control mt-2 @error('password') border border-danger @enderror" id="password" name="password" placeholder="Podaj hasło">
                                            <small id="passwordHelp" class="form-text text-muted"><a href="#">Nie pamiętasz hasła?</a></small>
                                        </div>
                                        <div class="col-12 col-md-12 ">
                                            <input type="checkbox" name="remember" >
                                            <label for="remember" class="text-dark mt-2 justify-content-start">Zapamiętaj mnie</label>
                                        </div>
                                        <div class="col-12 col-md-12 mt-2">
                                            <button class="btn btn-primary btn-block border-radius-20 mb-2" id="logIn">Zaloguj się</button>
                                        </div>
                                        <small id="registerHelp" class="form-text text-muted" data-toggle="collapse" data-target="#registerCollapse" aria-expanded="false" aria-controls="registerCollapse"><a href="#">Nie masz konta?</a></small>
                                    </form>
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

</body>
</html>
