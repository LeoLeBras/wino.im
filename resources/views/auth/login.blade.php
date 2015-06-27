@extends('public/layout')

@section('content')
	<div class="main-container">
		<section class="no-pad login-page fullscreen-element">
			<div class="background-image-holder">
				<img class="background-image" alt="Poster Image For Mobiles" src="{{ asset('/img/hero6.jpg') }}">
			</div>
			<div class="container align-vertical" style="margin-top:40px;">
				<div class="row">
					<div class="col-md-offset-4 col-sm-6 col-sm-offset-3 text-center col-md-4">
						<h1 class="text-white">Connexion</h1>
						<div class="photo-form-wrapper clearfix">
							<form class="form-horizontal" role="form" method="POST" action="{{ URL::route('login') }}">
								@if(count($errors)>0)	
									<div class="form-error" style="display:block; margin-top:-30px; margin-bottom:20px;">
										<span class="text-white">Un problème est survenu lors<br>de votre tentative de connexion ! :/</span>
									</div>
								@endif
								<input type="hidden" name="_token" value="{{ csrf_token() }}">
								<input type="email" class="form-email" name="email" value="
								@if(old('email'))
									{{ old('email') }}
								@elseif($auth)
									{{ $auth['email'] }}
								@endif" 
								placeholder="Adresse email">
								<input type="password" class="form-password" value="@if($auth){{ $auth['password'] }}@endif" name="password" placeholder="Mot de passe">
								<input class="login-btn btn-filled" type="submit" value="Connexion">
							</form>
						</div>
						<a href="{{ URL::route('homepage') }}" class="text-white">➞ Retour à l'accueil</a><br>
						<!--<a href="{{ URL::route('reset.password') }}" class="text-white">J'ai perdu mon mot de passe</a>-->
					</div>
				</div>
			</div>
		</section>
	</div>
@endsection