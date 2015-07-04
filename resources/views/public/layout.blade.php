<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="fr"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <title>{{ $title }}</title>
        <meta name="description" content="Wino est votre assistant personnel vous permettant de trouver facilement et rapidement le vin qui vous correspond.">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <link href="{{ asset('/css/public.min.css') }}" rel="stylesheet">
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,400,300,600,700%7CRaleway:700' rel='stylesheet' type='text/css'>
    </head>
    <body>
        <div class="nav-container">
            <nav class="top-bar overlay-bar">
                <div class="container">
                    <div class="row utility-menu">
                        <div class="col-sm-12">
                            <div class="utility-inner clearfix">
                                <span class="alt-font"> </span>
                                <span class="alt-font"><i class="icon icon_mail"></i> {{ 'hello@'.env('URL') }} </span>
                                <div class="pull-right">
                                    <a href="{{ URL::route('login') }}" class="btn btn-primary btn-white btn-xs">Connexion</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row nav-menu">
                        <a href="{{ URL::route('homepage') }}" class="col-md-2 col-sm-3 columns">
                            <img class="logo logo-light" alt="Logo" src="{{ asset('/img/logo-light.png') }}">
                            <img class="logo logo-dark" alt="Logo" src="{{ asset('/img/logo-dark.png') }}">
                        </a>
                    </div>
                    <div class="mobile-toggle">
                        <i class="icon icon_menu"></i>
                    </div>
                </div>
            </nav>
        </div>
        @yield('content')
        <div class="footer-container">
            <footer class="details">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-4">
                            <img alt="logo" class="logo" src="{{ asset('/img/logo-dark.png') }}">
                            <p>
                                Wino est votre assistant personnel vous permettant de trouver facilement et rapidement le vin qui vous correspond.
                            </p>
                        </div>
                        <div class="col-sm-4 col-xs-offset-1">
                            <h1>Contact</h1>
                            <p>
                                hello@wino.im<br>
                                +33 643 060 672<br>
                                <br>
                                27 Rue du Chazeau<br>
                                54220 Malzeville<br>
                                France
                            </p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <span class="sub">© Copyright 2015 WINO SYSTEM S.A.S - All Rights Reserved</span>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
        <script src="{{ asset('/js/public.min.js') }}"></script>
        @yield('javascript')
    </body>
</html>
