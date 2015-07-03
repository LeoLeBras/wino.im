@extends('dashboard/layout-account')

@section('breadcrumb')
    <li class="Breadcrumb_item"><a href="{{ URL::route('dashboard.account.index') }}" class="Breadcrumb_link">Accueil</a></li>
@endsection

@section('content')
	<h2>Mon profil</h2>
	<form method="POST" action="{{ URL::route('dashboard.account.index') }}">
        @if(Session::has('response'))
            <div class="alerts">
                @if(Session::get('response') == 'error'))
                <div class="alert -error">
                    Une erreur est survenue ! Veuillez vérifier que
                    tous les champs ont bien été correctement remplis !
                </div>
                {{ $user = '' }}
                @elseif(Session::get('response') == 'user-updated')
                <div class="alert -success">
                    Votre profil a bien été mis à jour !
                </div>
                @endif
            </div>
        @endif
        <fieldset>
            <div>
                <label for="email">Email :</label>
                <input @if(Session::has('email')) class="-error" @endif type="text" name="email" id="email" @if(isset($user) && $user != '') value="{{ $user->email }}" @endif value="{{ old('email') }}">
                @if(Session::has('email'))
                    <div class="input-alert">
                        Champ non renseigné.
                    </div>
                @endif
            </div>
            <div>
                <label for="compagny">Entreprise :</label>
                <input @if(Session::has('compagny')) class="-error" @endif type="text" name="compagny" id="compagny" @if(isset($user) && $user != '') value="{{ $user->compagny }}" @endif value="{{ old('compagny') }}">
                @if(Session::has('compagny'))
                    <div class="input-alert">
                        Champ non renseigné.
                    </div>
                @endif
            </div>
            <div>
                <label for="username">Utilsateur :</label>
                <input @if(Session::has('username')) class="-error" @endif type="text" name="username" id="username" @if(isset($user) && $user != '') value="{{ $user->name }}" @endif value="{{ old('username') }}">
                @if(Session::has('username'))
                    <div class="input-alert">
                        Champ non renseigné.
                    </div>
                @endif
            </div>
        	<input type="hidden" name="_token" value="{{{ csrf_token() }}}" />
        </fieldset>
        <div>
            <button class="btn -blue">Modifier</button>
        </div>
    </form>
@endsection
