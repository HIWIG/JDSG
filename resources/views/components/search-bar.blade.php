<div class="col-md-12 col-lg-9 col-12 text-center">
    <div class="contents">
        <div class="intro-title pt-1 pb-5">
            <h1>Znajdź to co cię interesuje <b class="f-ourcolor1">JDSG</b></h1>
        </div>

    </div>
    <form class="mb-5 " type="get" action="{{url('/category')}}">

        <div class=" p-2 bg-light border-radius-40">
            <div class="row justify-content-center">
                <div class="col-11 col-md-4">
                    <input type="text" class="form-control mb-3 mt-2" id="exampleFormControlInput1"  name="q" placeholder="Szukaj ogłoszeń">
                </div>
                <div class="col-6 col-md-4">
                    <div class="select mb-3 mt-2">
                        <select class="form-control " id="exampleFormControlSelect1" name="k">
                            <option>Wszystkie kategorie</option>
                            <option>Laptopy</option>
                            <option>Monitory</option>
                            <option>Klawiatury</option>
                            <option>Słuchawki</option>
                            <option>Myszki</option>
                            <option>Telefony</option>
                            <option>Dyski</option>
                            <option>Podzespoły</option>
                            <option>Konsole</option>
                            <option>Układy Scalone</option>
                        </select>
                    </div>
                </div>
                <div class="col-5 col-md-3 mt-2">
                    <button class="btn btn-primary btn-block border-radius-20 mb-2"><i class="fas fa-search fa-fw mr-3 "></i>Szukaj</button>
                </div>
            </div>

        </div>
    </form>
</div>
