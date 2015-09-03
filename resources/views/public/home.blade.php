<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <title>Wino Manager</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <link rel="stylesheet" href="{{ asset('css/public.min.css') }}">
        <!--[if gte IE 9]>
        	<link rel="stylesheet" type="text/css" href="{{ asset('css/public-ie9.css') }}" />
		<![endif]-->
        <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,400,300,600,700%7CRaleway:700' rel='stylesheet' type='text/css'>
        <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,400italic" rel="stylesheet" type="text/css">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.6.2/modernizr.js"></script>
        <style>
            .login-btn.btn-filled {
                position: relative;
                margin-top: -1px;
                border-color: white;
                color: white;
                padding: 19px 32px 19px;
            }

            .login-btn.btn-filled:hover {
                opacity: .6;
            }

            .form-email {
                border: medium none;
                box-shadow: none;
                font-family: "Open Sans","Helvetica Neue",Helvetica,Arial,sans-serif;
                background: rgba(255, 255, 255, 0.85) none repeat scroll 0% 0%;
                border-radius: 50px;
                padding: 14px 24px;
                width: auto;
                margin-bottom: 30px;
                margin-right: 12px;
                background: white;
                color: black;
            }
        </style>
    </head>
    <body>
    	<div class="loader">
    		<div class="spinner">
			  <div class="double-bounce1"></div>
			  <div class="double-bounce2"></div>
			</div>
    	</div>
		<div class="nav-container">
			<nav class="centered-logo top-bar">
				<div class="container">
					<div class="mobile-toggle">
						<i class="icon icon_menu"></i>
					</div>
				</div>
				<div class="bottom-border"></div>
			</nav>
		</div>
		<div class="main-container">
			<header class="fullscreen-element no-pad centered-text">
				<div class="background-image-holder parallax-background overlay">
					<img class="background-image" alt="Background Image" src="img/hero8.jpg">
				</div>
				<div class="container align-vertical">
					<div class="row">
                        <div class="col-md-12 text-center">
							<span class="text-white alt-font">Wino Manager</span>
							<h1 class="text-white">Touchez de nouveaux consommateurs<br>simplement et gratuitement.</h1>

							<a href="#ancre" class="btn btn-primary btn-white">Découvrir</a>
						</div>
					</div>
				</div>
			</header>
			<section class="text-image-bottom bg-white" id="ancre">
				<div class="container">
					<div class="row">
						<div class="col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1 text-center">
							<h1>Wino Manager a été conçu main dans la main avec les cavistes pour répondre à leurs besoins.</h1>
						</div>
					</div>
					<div class="row">
						<div class="col-sm-6">
							<p class="lead">
								Vous avez un site internet ou une page Facebook ? C'est un bon début, mais cela ne suffit plus. C'est le moment de passer à la vitesse supérieure. Gagnez des clients, augmentez votre CA et obtenez de précieuses statistiques sur vos clients et utilisateurs de l'application Wino.
							</p>
						</div>
						<div class="col-sm-6">
							<p class="lead">
								Vous n'avez pas besoin de connaissances informatiques particulières. Le logiciel s'adapte à vous. Vous pouvez y accéder depuis n'importe quel endroit et à n'importe quel moment depuis votre ordinateur, tablette ou smartphone. Alors plus rien ne devrait vous arrêter.</p>
						</div>
					</div>
				</div>
				<div class="text-center">
					<img alt="Freelancer Essentials" src="img/bottom1.jpg">
				</div>
			</section>
			<section>
				<div class="container">
					<div class="row">
						<div class="col-sm-6 text-center">
							<img class="phone-portrait" alt="App Screenshot" src="img/app-1.png">
						</div>
						<div class="align-vertical no-align-mobile clearfix col-sm-6">
							<div class="col-md-6 no-pad-left clearfix">
								<div class="feature feature-icon-small">
									<i class="icon icon-map-pin"></i>
									<h6>Géolocalisation</h6>
									<p>
										Permettre aux utilisateurs de localiser votre cave ainsi que les détails concernant votre boutique. Accès, horaires d'ouverture, contact téléphonique, site internet ...
									</p>
								</div>
							</div>
							<div class="col-md-6 no-pad-left clearfix">
								<div class="feature feature-icon-small">
									<i class="icon icon-wine"></i>
									<h6>Dédiée au vin</h6>
									<p>
										Nos utilisateurs aiment le vin et ont soif de bonnes idées. Utiliser Wino Manager, c'est communiquer sur les cibles qui vous correspondent.
									</p>
								</div>
							</div>
                            <div style="float: left;height: 4px;width: 100%;"></div>
							<div class="col-md-6 no-pad-left clearfix">
								<div class="feature feature-icon-small">
									<i class="icon icon-happy"></i>
									<h6>Avis</h6>
									<p>
										Afin d'améliorer encore plus votre service, recueillir les avis des clients est primordial. Vous pouvez donc centraliser tous les commentaires des utilisateurs au même endroit.
									</p>
								</div>
							</div>
							<div class="col-md-6 no-pad-left clearfix">
								<div class="feature feature-icon-small">
									<i class="icon icon-genius"></i>
									<h6>Algorithme</h6>
									<p>
										Notre algorithme évolue avec l'utilisateur et devient de plus en plus précis. Utiliser Wino c'est donner la chance aux utilisateurs de rencontrer vos vins.</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<section class="primary-features duplicatable-content">
				<div class="container">
					<div class="row">
							<div class="col-md-4 col-sm-6 clearfix">
								<div class="feature feature-icon-small">
									<i class="icon icon-desktop"></i>
									<h6 class="text-white">A votre image</h6>
									<p class="text-white">
										Avec votre tableau de bord en ligne vous pouvez gérer votre cave comme bon vous semble, embellir votre image et choisir seulement les vins que vous voulez promouvoir dans l'application.
									</p>
								</div>
							</div>
							<div class="col-md-4 col-sm-6 clearfix">
								<div class="feature feature-icon-small">
									<i class="icon icon-bargraph"></i>
									<h6 class="text-white">Statistiques</h6>
									<p class="text-white">
										Chaque mois, suivez vos performances avec des statistiques détaillées sur votre activité et plus généralement sur la ville dans laquelle vous êtes implanté. Cela vous permettra d'améliorer votre rentabilité.</p>
								</div>
							</div>
							<div class="col-sm-6 clearfix col-md-4">
								<div class="feature feature-icon-small">
									<i class="icon icon-megaphone"></i>
									<h6 class="text-white">Communication</h6>
									<p class="text-white">
										Bénéficier d'un canal de communication solide comme celui de Wino vous permettra de connaître les préférences et les habitudes de consommation des utilisateurs pour mieux répondre à leurs attentes.
									</p>
								</div>
							</div>
					</div>
				</div>
			</section>
			<section class="inline-image-right">
				<div class="container">
					<div class="row">
						<div class="col-sm-6 align-vertical no-align-mobile">
							<h1>Jean, est là pour vous aider tout au long de notre partenariat.</h1>
							<h6>Il est motivé, cool &amp; sympa.</h6>
							<p class="lead">
								Besoin d'aide pour entrer vos vins dans le tableau de bord Wino Manager ? Aucun souciDOC, Jean est l'homme de la situation. Il vous répond du lundi au samedi de 8h00 à 21h00 pour tous vos petits tracas. Alors, fermez les yeux et laissez vous guider dans cette aventure extraordinaire.&nbsp;<br></p>
						</div>
						<div class="col-sm-6 text-center">
							<img alt="Product Image" class="product-image" src="img/devices.png">
						</div>
					</div>
				</div>
			</section>
			<section class="video-inline">
				<div class="container">
					<div class="row">
						<div class="col-md-6 col-sm-12">
							<h1 class="space-bottom-medium"><br>Et si vous découvriez Wino en quelques secondes ?</h1>
							<p class="lead space-bottom-medium">
								Vous l'aurez compris, Wino permet à nos utilisateurs de trouver simplement un vin qui correspond à leurs attentes de manière rapide et ludique (accord avec un met, occasions, prix ...) et aux cavistes d'augmenter leur visibilité.
							</p>
						</div>
						<div class="col-md-6 col-sm-12">
							<div class="inline-video-wrapper">
								<video controls="">
									<source type="video/mp4" src="http://media.wino.im/winopubcaviste.m4v">
								</video>
							</div>
						</div>
					</div>
				</div>
			</section>
			<section class="strip bg-secondary-1">
				<div class="container">
					<div class="row clearfix">
						<div class="col-sm-6 col-xs-12 pull-left">
							<h3 class="text-white"><strong>Télécharger</strong> notre documentation</h3>
						</div>
						<div class="col-sm-4 col-xs-12 pull-right text-right">
							<a href="http://media.wino.im/doc.pdf" class="btn btn-primary btn-white" target="default">Version PDF</a>
						</div>
					</div>
				</div>
			</section>
			<section class="action-banner overlay">
				<div class="background-image-holder">
					<img class="background-image" alt="Background Image" src="img/hero4.jpg">
				</div>
				<div class="container">
					<div class="row">
						<div class="col-md-offset-2 col-sm-10 col-sm-offset-1 text-center col-md-8">
							<h1 class="text-white">Êtes-vous prêt à rejoindre Wino Manager ?</h1>
							<h2 class="text-white">C'est simple, gratuit et bénéfique pour votre entreprise. Demandez à être rappelé.</h2>
                              <form class="join">
                                <input class="form-email" type="text" name="phone" placeholder="Numéro de téléphone">
                                <input class="login-btn btn-filled" type="submit" value="Appelez-moi">
                              </form>
						</div>
					</div>
				</div>
			</section>
		</div>
		<div class="footer-container" style="margin-top: -1px;">
			<footer class="social bg-secondary-1">
				<div class="container">
					<div class="row">
						<div class="col-sm-12 text-center">
							<h1 class="text-white">Contactez-nous</h1>
							<a href="mailto:hello@wino.im" class="text-white" target="default">  <strong>hello@wino.im</strong></a><br>
							<br>
							<span class="sub">© Copright 2015 Tous droits réservés - Wino Technologies S.A.S au capital de 15000,00€ - 27 rue du chazeau 54220 MALZEVILLE FR</span>
						</div>
					</div>
				</div>
			</footer>
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

        <script>
            $(document).ready(function(){
                $('.join').submit(function(e){
                    e.preventDefault();
                    var inputs = ['phone'];
                    var data = [];
                    for(var i in inputs){
                        data[inputs[i]] = $('input[name="' + inputs[i] + '"]').val();
                    }
                    $.ajax({
                        method: 'GET',
                        url: '{{ URL::route('join') }}',
                        data: {
                            phone: data['phone']
                        },
                        success: function(){
                            var $submit = $('.login-btn.btn-filled');
                            var text = $submit.val();
                            var background = $submit.css('backgroundColor');
                            $submit.val('Envoyé ! :)').css('backgroundColor', '#86B16C');
                            setTimeout(function(){
                                $submit.val(text).css('backgroundColor', background);
                                for(i in inputs){
                                    $('input[name="' + inputs[i] + '"]').val('');
                                }
                            },5000);
                        },
                        error: function(){
                            alert('ERROR !');
                        }
                    });
                });
            });
        </script>
    </body>
</html>
