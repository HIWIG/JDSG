<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@1,500&display=swap" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">
    <!--TODO -->
    <!--Trzeba ogarnąć problem z sekcją z img background. Magiczny margines tam fruwa. Obstawiam że row może mieć cos z tym wspólnego.-->
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
    @if ($errors->any())
        <script>
                alert("Wprowadzono błędne wyszukanie");
        </script>
    @endif
</section>

<section id="categoryColumns">
    <script>
        let x=document.cookie;
        console.log(x);
        if(x==='grid'){
            gridview();
        }
        if(x==='list'){
            listview();
        }
    </script>
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
                    @if($categoriesCount->isEmpty())
                        <div class="col-12 row justify-content-center">
                            <h4 style="margin-bottom: 3em; margin-top: 3em;">Niestety szukana fraza nie znajduje się w naszej bazie ofert</h4>
                        </div>

                    @endif

                @foreach($ad as $advert)
                    <div class="col-12 col-sm-6 col-md-6 col-lg-6">
                        <div class="AdvertContentBox">
                            <figure class="figure mb-0">
                                <img src="{{asset('/storage/img/products/'.$advert->image)}}" class="img-fluid img-h-our1"  style="object-fit: contain" alt="A generic square placeholder image with rounded corners in a figure.">
                            </figure>
                            <div class="advertContentDesciption p-3">

                                <h5 class="pt-1 pb-2 advertTitle"><a href="#">{{$advert->title}}

                                        </a></h5>
                                <p> {{mb_strimwidth($advert->description,0,30,"...")}}</p>
                                <ul class="list-inline">
                                    <li class="list-inline-item p-1">
                                        <span class="far fa-calendar-alt pr-1 font-menu-color"></span>
                                        {{substr($advert->created_at,0,strrpos($advert->created_at,' '))}}
                                    </li>
                                    <li class="list-inline-item p-1">
                                        <span class="fas fa-user pr-1 font-menu-color"></span>
                                        {{$advert->user->username}}
                                    </li>
                                    <li class="list-inline-item p-1">
                                        <span class="fas fa-desktop pr-1 font-menu-color"></span>
                                        {{$advert->category->title}}
                                    </li>
                                </ul>
                                <div class="listing-bottom clearfix pt-3 pb-2 border-top">
                                    <a href="#" class="float-left w-50"><span class="fas fa-map-marker-alt font-menu-color pr-1"></span> {{$advert->city}}</a>

                                    <form action="{{url('/advertisement')}}" type="get">
                                        <button type="submit" class="btn btn-primary border-radius-20" class="fas fa-pen-square mr-1" name="x" value="{{$advert->id}}">  Więcej  </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                    @endforeach

                        @if(!isset($x))
                            {{$ad->appends(['q'=>$search_text,'k'=>$search_category])->links("pagination::bootstrap-4")}}
                        @elseif(isset($x))
                            {{$ad->appends(['x'=>$x,'k'=>$search_category])->links("pagination::bootstrap-4")}}
                            @endif

                </div>

                <div id="listview" class="col-12  row justify-content-center" style="display: none;">

                    @if($categoriesCount->isEmpty())
                        <div class="col-12 row justify-content-center">
                        <h4 style="margin-bottom: 3em; margin-top: 3em;">Niestety szukana fraza nie znajduje się w naszej bazie ofert</h4>
                        </div>

                    @endif
                    @foreach($ad as $advert)
                    <div class="col-12 row justify-content-center">
                        <div class="AdvertContentBox row justify-content-center">
                            <div class="col-4">
                                <figure class="figure mb-0">
                                    <img src="{{asset('/storage/img/products/'.$advert->image)}}" class="img-fluid img-h-our1" alt="A generic square placeholder image with rounded corners in a figure."/>
                                </figure>
                            </div>
                            <div class="col-8">
                                <div class="advertContentDesciption p-3">
                                    <h5 class="pt-1 pb-2 advertTitle"><a href="#">{{$advert->title}}</a></h5>
                                    <p> {{$advert->description}}</p>
                                    <ul class="list-inline">
                                        <li class="list-inline-item p-1">
                                            <span class="far fa-calendar-alt pr-1 font-menu-color"></span>
                                            {{$advert->created_at}}
                                        </li>
                                        <li class="list-inline-item p-1">
                                            <span class="fas fa-user pr-1 font-menu-color"></span>
                                            {{$advert->user->username}}
                                        </li>
                                        <li class="list-inline-item p-1">
                                            <span class="fas fa-desktop pr-1 font-menu-color"></span>
                                            {{$advert->cost}}
                                        </li>
                                    </ul>
                                    <div class="listing-bottom clearfix pt-3 pb-2 border-top">
                                        <a href="#" class="float-left w-50"><span class="fas fa-map-marker-alt font-menu-color pr-1"></span> Katowice</a>
                                        <form action="{{url('/advertisement')}}" type="get">
                                            <button type="submit" class="btn btn-primary border-radius-20" class="fas fa-pen-square mr-1" name="x" value="{{$advert->id}}">  Więcej  </button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach

                        @if(!isset($x))
                            {{$ad->appends(['q'=>$search_text,'k'=>$search_category])->links("pagination::bootstrap-4")}}
                        @elseif(isset($x))
                            {{$ad->appends(['x'=>$x,'k'=>$search_category])->links("pagination::bootstrap-4")}}
                        @endif


                </div>





                <script>

                    function gridview(){
                        let view=document.getElementById("gridview");
                        let notview=document.getElementById("listview");
                        notview.style.display="none";
                        view.style.display="flex";
                        console.log('xxx');
                        setCookie('grid');
                    }
                    function listview(){
                        let notview=document.getElementById("gridview");
                        let view=document.getElementById("listview");
                        notview.style.display="none";
                        view.style.display="flex";
                        setCookie('list');
                    }
                    function setCookie(name){
                        document.cookie=name;
                    }
                </script>


            </div>
            <div class="col-md-3 col-sm-12">
                <div class="catTable ">
                    <div class="ml-2 mt-1 font-menu-color">
                    <h4>Kategorie:</h4>
                    </div>
                    <div  class="ml-1 font-menu-color">
                    <ul class="catList">
                        @foreach($categoriesCount as $c)
                            <a href="#"><li>{{$c->category->title}}<div class="pull-right">({{$c->ct}})</div> </li></a>
                        @endforeach
                    </ul>

                </div>

            </div>

        </div>
    </div>
</section>





<x-footer/> <!-- STOPKA GRZESIA -->

<script src="{{ asset('js/app.js') }}" type="text/javascript"></script>
</body>
</html>

