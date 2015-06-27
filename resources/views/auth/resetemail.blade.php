@extends('public/layout')

@section('content')
	<div class="main-container">
		<section class="contact-photo">
			<div class="background-image-holder">
				<img class="background-image" alt="Background Image" src="img/hero24.jpg">
			</div>
			<div class="container" style="margin-bottom:">
				<div class="row">
					<div class="col-md-offset-3 col-sm-8 col-sm-offset-2 text-center col-md-6">
						<h1 class="text-white">Mot de passe perdu</h1>
					</div>
				</div>
				<div class="photo-form-wrapper clearfix">
					<form class="email-form">
						<div class="row">
							<div class="col-md-6 col-sm-8 col-sm-offset-2 col-md-offset-3 text-center">
								<input class="form-message validate-required" type="email" name="email" placeholder="Votre adresse email">
								<input type="submit" class="send-form btn-filled" value="Valider">
							</div>	
						</div>
					</form>
				</div>
			</div>
		</section>
	</div>
@endsection