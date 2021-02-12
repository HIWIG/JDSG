
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

<section id="contactus">
    <div class="container">
        <div class="row">
            <div class="kontakt col-12">
                <p class="text-left">  Kontakt z obsługą klienta</p>
                <div class="vl col-12"></div>
            </div>
            <div class="mailcontact col-sm-12 col-md-4">
                <p> e-mail: <span class="pull-right">test@test.com</span> </p>
                <p>numer telefonu: <span class="pull-right">1233456789</span> </p>
                <p>lorem ipsum: <span class="pull-right">1233456789</span> </p>
                <div class="vl2 col-12 d-md-none"></div>
            </div>
            <div class="mailcontact col-sm-12 col-md-4">
                <p>Godziny pracy centrali: </p>
                <p> pon.-piątek <span class="pull-right">8:00-20:00</span> </p>
                <p> sobota <span class="pull-right">10:00-18:00</span> </p>
                <div class="vl2 col-12 d-md-none"></div>

            </div>
            <div class="mailcontact col-sm-12 col-md-4">
                <p>Adres centrali: </p>
                <p> Akademia Techniczno Humanistyczna </p>
                <p> Willowa 2 </p>
                <p> 43-300 Bielsko-biała </p>

            </div>

        </div>
    </div>
</section>
<section>
    <div class="container">
        <div class="row">
            <div class="contactform  col-m-12 col-m-8 col-lg-6 d-md-inline-block">
                <form class="form-horizontal">
                    <fieldset>

                        <!-- Text input-->
                        <div class="form-group">
                            <label class= control-label" for="Twój adres email">Twój adres e-mail</label>
                            <div>
                                <input id="Twój adres email" name="Twój adres email" type="text" placeholder="e-mail" class="form-control" required="">

                            </div>
                        </div>

                        <!-- Textarea -->
                        <div class="form-group">
                            <label class=" control-label" for="contacttext">Treść twojego pytania:</label>
                            <div>
                                <textarea class="form-control" id="contacttext" name="contacttext" placeholder="Tekst"></textarea>
                            </div>
                        </div>

                        <!-- Multiple Radios -->
                        <div class="form-group">
                            <label class="control-label" for="regulamin"></label>
                            <div>
                                <div class="radio">
                                    <label for="regulamin-0">
                                        <input type="radio" name="regulamin" id="regulamin-0" value="1" checked="checked">
                                        Potwierdzam że zapoznałem się z regulaminem i zgadzam się na przetwarzanie moich danych osobowych
                                    </label>
                                </div>
                            </div>
                        </div>

                        <!-- Button -->
                        <div class="form-group">
                            <label class="control-label" for="submitbutton"></label>
                            <div>
                                <button id="submitbutton" name="submitbutton" class="btn btn-primary">WYŚLIJ</button>
                            </div>
                        </div>

                    </fieldset>
                </form>

            </div>
            <div class="z-depth-3 map-container  col-sm-12 col-md-6  d-none d-md-inline">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2576.161726211598!2d19.055378115893564!3d49.78302354310989!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47169fc0a7862b97%3A0xab58f9e2cef89ecf!2sAkademia%20Techniczno-Humanistyczna!5e0!3m2!1spl!2spl!4v1607173095247!5m2!1spl!2spl"  width="500" height="400" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
            </div>
        </div>
    </div>
</section>

<script src="js/jquery.js" type="text/javascript"></script>
<script src="js/bootstrap.bundle.min.js" type="text/javascript"></script>

<script defer src="js/EventFunctions.js" type="text/javascript"></script>
</body>
</html>

