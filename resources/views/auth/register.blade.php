@extends('public/layout')

@section('content')
	<div class="main-container">
		<section class="contact-photo">
			<div class="background-image-holder">
				<img class="background-image" alt="Background Image" src="{{ asset('/img/hero24.jpg') }}">
			</div>
			<div class="container">
				<div class="row">
					<div class="col-md-offset-3 col-sm-8 col-sm-offset-2 text-center col-md-6">
						<h1 class="text-white">Enregistrement</h1>
					</div>
				</div>
				<div class="photo-form-wrapper clearfix">
					<form class="form" role="form" method="POST" action="{{ URL::route('register') }}">
					@if(Session::has('response'))).
						<div class="row" style="margin-bottom:40px">
							<div class="col-md-6 col-sm-8 col-sm-offset-2 col-md-offset-3 text-center" style="margin-top: -46px;">		
								@if(Session::get('response') == 'success')
									<div class="form-success">
										<span class="text-white">Vous êtes à présent enregistrer dans notre base de données.<br>Vous allez recevoir un mail de confirmation dans un très court instant !</span>
									</div>
								@elseif(Session::get('response') == 'error')
									<div class="form-error">
										<span class="text-white">Un problème a eu lieu. Veuillez remplir à nouveau le formulaire
										</span>
									</div>
								@elseif(Session::get('response') == 'error-email-doublon')
									<div class="form-error">
										<span class="text-white">Vous êtes déjà enregistrés dans notre base de données avec cette adresse mail !
										</span>
									</div>
								@endif
							</div>	
						</div>
						@endif
						<div class="row">
							<div class="col-md-3 col-sm-4 col-sm-offset-2 col-md-offset-3">
								<input class="form-name validate-required" type="text" placeholder="Nom de la cave" required name="compagny">
							</div>
							<div class="col-md-3 col-sm-4">
								<input class="form-email validate-required" type="text" placeholder="Nom du gérant" required name="name">
							</div>
						</div>
						<div class="row">
							<div class="col-md-3 col-sm-4 col-sm-offset-2 col-md-offset-3">
								<input class="form-email validate-required validate-email" type="email" placeholder="Adresse email" required name="email">
							</div>
							<div class="col-md-3 col-sm-4">
								<input class="form-name validate-required" type="password" placeholder="Choisir un mot de passe" required name="password">
							</div>
						</div>
						<div class="row">
							<div class="col-md-3 col-sm-4 col-sm-offset-2 col-md-offset-3">
								<input class="form-email validate-required" type="text" placeholder="Site internet" name="url">
							</div>
							<div class="col-md-3 col-sm-4">
								<input class="form-name validate-required" type="text" placeholder="Téléphone" name="phone">
							</div>
						</div>
						<div class="row">
							<div class="col-md-3 col-sm-4 col-sm-offset-2 col-md-offset-3">
								<input class="form-name validate-required" type="text" placeholder="Adresse" name="place">
							</div>
							<div class="col-md-3 col-sm-4">
								<input class="form-email validate-required" type="text" placeholder="Ville" name="city">
							</div>
						</div>
						<div class="row">
							<div class="col-md-6 col-sm-8 col-sm-offset-2 col-md-offset-3 text-center">
								<input class="form-message validate-required" type="text" name="schedule" placeholder="Horaires (exemple: Lundi-Vendredi: 10:00-12:00 et 14:00-18:00;...)">
							</div>
						</div>
						<div class="row">
							<div class="col-md-3 col-sm-4 col-sm-offset-2 col-md-offset-3">
								<input class="form-name validate-required" type="text" placeholder="SIRET" name="siret">
							</div>
							<div class="col-md-3 col-sm-4">
								<input class="form-email validate-required" type="text" placeholder="Dénomination sociale" name="denomination">
							</div>
						</div>
						<div class="row">
							<div class="col-md-6 col-sm-8 col-sm-offset-2 col-md-offset-3 text-center">
								<input type="hidden" name="_token" value="{{ csrf_token() }}">
								<input type="submit" class="send-form btn-filled" value="Valider">
							</div>	
						</div>
					</form>
				</div>
			</div>
		</section>
	</div>
@endsection