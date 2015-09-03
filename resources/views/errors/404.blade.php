<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <title>404 Bouteille vide</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <link rel="stylesheet" href="{{ asset('css/public.min.css') }}">
        <!--[if gte IE 9]>
        	<link rel="stylesheet" type="text/css" href="css/ie9.css" />
		<![endif]-->
        <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,400,300,600,700%7CRaleway:700' rel='stylesheet' type='text/css'>
    </head>
    <body>
		<div class="nav-container">
		</div>
		<div class="main-container">
		<section class="no-pad error-page bg-primary fullscreen-element">
				<div class="container align-vertical">
					<div class="row">
						<div class="text-center col-sm-12">
							<i class="icon icon-compass"></i>
							<h1 class="jumbo">404</h1>
							<h1><strong>Oops, la bouteille semble vide !</strong><br>Vous n'êtes sûrement pas sur la bonne page...</h1>
							<a href="#" class="btn btn-primary btn-white">Retour acceuil</a>
						</div>
					</div>
				</div>
			</section>
		</div>
		<div class="footer-container">
		</div>

        <!-- SUIVI GOOGLE -->
            <script>
              (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
              (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
              m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
              })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

              ga('create', 'UA-67066384-1', 'auto');
              ga('send', 'pageview');
            </script>
         <!-- // SUIVI GOOGLE -->

        <script src="{{ asset('js/public.min.js') }}"></script>
    </body>
</html>
