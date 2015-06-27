@extends('dashboard/layout-account')

@section('breadcrumb')
    <li class="Breadcrumb_item"><a href="{{ URL::route('dashboard.account.index') }}" class="Breadcrumb_link">Accueil</a></li> 
@endsection

@section('content')
	<h2>Mon profil</h2>
	<form method="POST" action="{{ URL::route('dashboard.account.index') }}"> 
        <fieldset>
            <div>
                <label for="email">Email :</label>
                <input type="text" name="email" id="email" value="test@test.fr">
            </div>
            <div>
                <label for="compagny">Entreprise :</label>
                <input type="text" name="email" id="compagny" value="Ma compagny Test">
            </div>
            <div>
                <label for="username">Utilsateur :</label>
                <input type="text" name="username" id="username" value="test">
            </div>
        	<input type="hidden" name="_token" value="{{{ csrf_token() }}}" />
        </fieldset>
        <div>
            <button class="btn -blue">Modifier</button>
        </div>
    </form>
@endsection