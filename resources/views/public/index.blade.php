<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Wino - Trouvez le bon vin</title>
    <meta name="description" content="Wino est une application vous permettant de trouver rapidement et facilement le vin qui correspond à vos envies, vos plats et aux situations.">
    <link rel="stylesheet" href="{{ asset('/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/animate.min.css') }}">
    <link href='https://fonts.googleapis.com/css?family=Lato:100,300,400,700' rel='stylesheet' type='text/css'>
    <meta name="viewport" content="initial-scale=0.8">
    <link rel="icon" type="image/png" href="{{ asset('/img/favicon.png') }}" />
</head>
<body>
    <div class="container">
        <img class="animated fadeInDown" id="app" src="{{ asset('/img/app_icon.png') }}" alt="Wino">
        <h1 class="animated fadeIn">coming soon</h1>
    </div>

    <div class="footer">
        <ul id="footer">
            <li><a href="#">A Propos</a></li>
            <li><a href="mailto:hello@wino.im?subject=contact">Contact</a></li>
        </ul>
        <p>Copyright 2015 - WINO TECHNOLOGIES SAS</p>
    </div>

    <!-- Code de suivi Analytics -->

    <script>

        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

        ga('create', 'UA-63439384-1', 'auto');
        ga('send', 'pageview');

    </script>

</body>
</html>
