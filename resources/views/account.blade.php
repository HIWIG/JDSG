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

                        <h4 class="mb-4"><i class="fas fa-user "></i>  Dane konta </h4>
                        @auth
                        <div>
                            <ul class="list-group ">
                                <li class="list-group-item border-0">Nazwa użytkownika:  {{auth()->user()->username }}</li>
                                <li class="list-group-item border-0">Imię: {{auth()->user()->name }}</li>
                                <li class="list-group-item border-0">Nazwisko: {{auth()->user()->surname }}</li>
                                <li class="list-group-item border-0">Email: {{auth()->user()->email }}</li>
                            </ul>
                        </div>

                        <div>
                            <h5>Twoje ogłoszenia:</h5>
                            <ul style="list-style-type:none">
                            @foreach($ads as $ad)
                                    <div class="vl col-12"></div>
                                    <li> <div class="row ">
                                            <div class="col-12 col-md-8 ">

{{--                                            {{$ad->title }}--}}
                                                {{mb_strimwidth($ad->title,0,25,"...")}}
                                             </div>
                                            <div class="col-12 col-md-4">
                                                    <form action="{{url('/delete-product/'.$ad->id)}}" method="post" onSubmit="return confirm('Czy jesteś pewny ,że chcesz usunąć ogłoszenie?');">
                                                        {{method_field('DELETE')}}
                                                        {{csrf_field()}}

                                                            <button class="btn btn-danger mt-2 mb-3 w-100 border-radius-20 box-shadow-black pull-right" type="submit" >Usuń ogłoszenie</button>
                                                    </form>
                                            </div>
                                        </div>
                                      </li>
                            @endforeach
                            </ul>
                        </div>

                        {{--<div class="tags">

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
                        </div>--}}
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-12 ">
                    <div class="seller-info shadow-sm p-5 mt-3  bg-white rounded">
                        <h4 class="mb-4">Witaj {{auth()->user()->username }}</h4>
                        <div class="text-center mb-4">
                            <img width="150" src="img/userimg.png" class="img-fluid  border border-primary br-circle" style="border-radius:50%" alt="User image">
                        </div>
                        <div>
                            <a href="#" class="btn btn-primary mt-2 mb-3 w-100 border-radius-20 box-shadow-black"><i class="fas fa-pen-square mr-1"></i>Dodaj Ogłoszenie</a>
                        </div>
                        <div>
                            <form action="{{route('logout')}}" method="post">
                                @csrf
                                <button type="submit" class="btn btn-primary mt-2 mb-3 w-100 border-radius-20 box-shadow-black">Wyloguj</button>
                            </form>
                        </div>
                    </div>
                </div>

{{--                <div class="col-lg-12 col-md-6 col-12 ">--}}
{{--                    <div class="bottom-info p-5 shadow-sm mt-3 bg-white rounded">--}}

{{--                        <h4>Twoje ogłoszenia</h4>--}}
{{--                        <div class="other-products row ">--}}
{{--                            <div class="col-lg-4 col-12 shadow-sm rounded p-3 row">--}}
{{--                                <div class="col-6">--}}
{{--                                    <a href="" class="link">--}}
{{--                                        <img src="img/1576204927_maxresdefault_9_story.jpg" class="other-photo" alt="">--}}
{{--                                    </a>--}}
{{--                                </div>--}}
{{--                                <div class="col-6 pl-3">--}}
{{--                                    <a href="" class="link">--}}

{{--                                        <p class="font-weight-bold">Title</p>--}}
{{--                                        Price--}}
{{--                                    </a>--}}

{{--                                </div>--}}
{{--                            </div>--}}

{{--                            <div class="col-lg-4 col-12 shadow-sm rounded p-3 row">--}}
{{--                                <div class="col-6">--}}
{{--                                    <a href="" class="link">--}}
{{--                                        <img src="img/1576204927_maxresdefault_9_story.jpg" class="other-photo" alt="">--}}
{{--                                    </a>--}}
{{--                                </div>--}}
{{--                                <div class="col-6 pl-3">--}}
{{--                                    <a href="" class="link">--}}

{{--                                        <p class="font-weight-bold">Title</p>--}}
{{--                                        Price--}}
{{--                                    </a>--}}

{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="col-lg-4 col-12 shadow-sm rounded p-3 row">--}}
{{--                                <div class="col-6">--}}
{{--                                    <a href="" class="link">--}}
{{--                                        <img src="img/1576204927_maxresdefault_9_story.jpg" class="other-photo" alt="">--}}
{{--                                    </a>--}}
{{--                                </div>--}}
{{--                                <div class="col-6 pl-3">--}}
{{--                                    <a href="" class="link">--}}

{{--                                        <p class="font-weight-bold ">Title</p>--}}
{{--                                        Price--}}
{{--                                    </a>--}}

{{--                                </div>--}}
{{--                            </div>--}}
                        </div>
                        @endauth
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

