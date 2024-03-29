@extends('dashboard/layout-backoffice')

@section('breadcrumb')
    <li class="Breadcrumb_item"><a href="{{ URL::route('backoffice.index') }}" class="Breadcrumb_link">Mes vins</a></li>
    <li class="Breadcrumb_item"><a href="{{ URL::route('dashboard.wine.add') }}" class="Breadcrumb_link">Ajouter un vin</a></li>
@endsection

@section('content')
    <h2 class="Wrapper_title">Ajouter un vin</h2>
    <form method="POST" action="{{ URL::route('dashboard.wine.add') }}">
        @if(Session::has('response') && Session::get('response') == 'error')
            <div class="alerts">
                <div class="alert -error">
                    Une erreur est survenue ! Veuillez vérifier que
                    tous les champs ont bien été correctement remplis !
                </div>
            </div>
        @endif
        <fieldset>
            <div>
                <label for="region">Région :</label>
                <div class="input-select" data-placeholder="Sélectioner une région">
                    <input type="text" name="region" @if(Session::has('region')) class="-error" @endif value="{{ old('region') }}" readonly>
                    <ul>
                        <li>Alsace</li>
                        <li>Beaujolais</li>
                        <li>Bordeaux</li>
                        <li>Bourgogne</li>
                        <li>Champagne</li>
                        <li>Charentes</li>
                        <li>Corse</li>
                        <li>Jura</li>
                        <li>Languedoc</li>
                        <li>Provence</li>
                        <li>Rousillon</li>
                        <li>Savoie</li>
                        <li>Sud-Ouest</li>
                        <li>Val de Loire</li>
                        <li>Vallée du Rhône</li>
                    </ul>
                </div>
                @if(Session::has('region'))
                    <div class="input-alert">
                        Champ non renseigné.
                    </div>
                @endif
            </div>
            <div>
                <label for="name">Vin :</label>
                <input id="name" name="name" type="text" value="{{ old('name') }}" @if(Session::has('name')) class="-error" @endif>
                @if(Session::has('name'))
                    <div class="input-alert">
                        Champ non renseigné.
                    </div>
                @endif
            </div>
            <div>
                <label for="color">Type :</label>
                <div class="input-select" data-placeholder="Choisir une couleur">
                    <input type="text" name="color" readonly value="{{ old('color') }}" @if(Session::has('color')) class="-error" @endif>
                    <ul>
                        <li class="-color -red">Rouge</li>
                        <li class="-color -white">Blanc</li>
                        <li class="-color -pink">Rosé</li>
                    </ul>
                </div>
                @if(Session::has('color'))
                    <div class="input-alert">
                        Champ non renseigné.
                    </div>
                @endif
            </div>
            <div>
                <label for="year">Année :</label>
                <input id="year" name="year" type="text" value="{{ old('year') }}" @if(Session::has('year')) class="-error" @endif>
                <div class="input-info">
                    ex: 1999
                </div>
                @if(Session::has('year'))
                    <div class="input-alert">
                        Champ non renseigné.
                    </div>
                @endif
            </div>
        </fieldset>
        <fieldset>
            <div>
                <label for="price">Prix :</label>
                <input id="price" name="price" type="text" value="{{ old('price') }}" @if(Session::has('price')) class="-error" @endif>
                <div class="input-info">
                    ex: 13,50€
                </div>
                @if(Session::has('price'))
                    <div class="input-alert">
                        Champ non renseigné.
                    </div>
                @endif
            </div>
            <div>
                <label for="stock">Stock :</label>
                <input name="stock" id="stock" type="text" value="{{ old('stock') }}" @if(Session::has('stock')) class="-error" @endif>
                @if(Session::has('stock'))
                    <div class="input-alert">
                        Champ non renseigné.
                    </div>
                @endif
            </div>
        </fieldset>
        <div>
            <button class="btn -blue">Vailder</button>
        </div>
        <input type="hidden" name="_token" value="{{{ csrf_token() }}}" />
    </form>
@endsection

@section('javascript')
    <script src="{{ asset('/js/jquery.js') }}"></script>
    <script src="{{ asset('/js/form.js') }}"></script>
@endsection
