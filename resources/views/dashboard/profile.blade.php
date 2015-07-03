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
                @if(Session::get('response') == 'error')
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
                <label for="username">Utilsateur :</label>
                <input @if(Session::has('username')) class="-error" @endif type="text" name="username" id="username" @if(isset($user) && $user != '') value="{{ $user->name }}" @endif value="{{ old('username') }}">
                @if(Session::has('username'))
                    <div class="input-alert">
                        Champ non renseigné.
                    </div>
                @endif
            </div>
            <div>
                <label for="username">Utilsateur :</label>
                <input @if(Session::has('username')) class="-error" @endif type="text" name="username" id="username" @if(isset($user) && $user != '') value="{{ $user->name }}" @endif value="{{ old('username') }}">
                @if(Session::has('username'))
                <label for="website">Website :</label>
                <input @if(Session::has('website')) class="-error" @endif type="text" name="website" id="website" @if(isset($user) && $user != '') value="{{ $user->website }}" @endif value="{{ old('website') }}">
                @if(Session::has('website'))
                    <div class="input-alert">
                        Champ non renseigné.
                    </div>
                @endif
            </div>
            <div>
                <label for="phone">Téléphone :</label>
                <input @if(Session::has('phone')) class="-error" @endif type="text" name="phone" id="phone" @if(isset($user) && $user != '') value="{{ $user->phone }}" @endif value="{{ old('phone') }}">
                @if(Session::has('phone'))
                    <div class="input-alert">
                        Champ non renseigné.
                    </div>
                @endif
            </div>
            <div>
                <label for="siret">Siret :</label>
                <input @if(Session::has('siret')) class="-error" @endif type="text" name="siret" id="siret" @if(isset($user) && $user != '') value="{{ $user->siret }}" @endif value="{{ old('siret') }}">
                @if(Session::has('siret'))
                    <div class="input-alert">
                        Champ non renseigné.
                    </div>
                @endif
            </div>
            <div>
                <label for="denomination">Dénom. :</label>
                <input @if(Session::has('denomination')) class="-error" @endif type="text" name="denomination" id="denomination" @if(isset($user) && $user != '') value="{{ $user->denomination }}" @endif value="{{ old('denomination') }}">
                @if(Session::has('denomination'))
                    <div class="input-alert">
                        Champ non renseigné.
                    </div>
                @endif
            </div>
        	<input type="hidden" name="_token" value="{{{ csrf_token() }}}" />
        </fieldset>
        <fieldset>
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
                <label for="place">Adresse :</label>
                <input @if(Session::has('place')) class="-error" @endif type="text" name="place" id="place" @if(isset($user) && $user != '') value="{{ $user->place }}" @endif value="{{ old('place') }}">
                @if(Session::has('place'))
                    <div class="input-alert">
                        Champ non renseigné.
                    </div>
                @endif
            </div>
            <div>
                <label for="city">Ville :</label>
                <input @if(Session::has('city')) class="-error" @endif type="text" name="city" id="city" @if(isset($user) && $user != '') value="{{ $user->city }}" @endif value="{{ old('city') }}">
                @if(Session::has('city'))
                    <div class="input-alert">
                        Champ non renseigné.
                    </div>
                @endif
            </div>
            <div>
                <label for="schedule">Horaires :</label>
                <input @if(Session::has('schedule')) class="-error" @endif type="text" name="schedule" id="schedule" @if(isset($user) && $user != '') value="{{ $user->schedule }}" @endif value="{{ old('schedule') }}">
                @if(Session::has('schedule'))
                    <div class="input-alert">
                        Champ non renseigné.
                    </div>
                @endif
            </div>
            <div class="textarea">
                <label for="description">Descript. :</label>
                <textarea @if(Session::has('description')) class="-error" @endif type="text" name="description" id="description">@if(isset($user)&&$user!=''){{$user->description}}@else{{old('description')}}@endif</textarea>
                @if(Session::has('description'))
                    <div class="input-alert">
                        Champ non renseigné.
                    </div>
                @endif
            </div>
        </fieldset>
        <div>
            <button class="btn -blue">Modifier</button>
        </div>
    </form>
@endsection
