@extends('dashboard/layout')

@section('page')
    <nav class="Nav">
        <ul class="Nav_list">
            <li class="Nav_item"><a class="Nav_link -home is-active" href="{{ URL::route('backoffice.index') }}" aria-label="Accueil"></a></li>
            <li class="Nav_item"><a class="Nav_link -faq" href="{{ URL::route('dashboard.assistance.index') }}" aria-label="FAQ"></a></li>
            <li class="Nav_item"><a class="Nav_link -profile" href="{{ URL::route('dashboard.account.index') }}" aria-label="Profil"></a></li>
        </ul>
    </nav>
    <header class="Header">
        <h1 class="Header_title">Tableau de bord</h1>
        <ul class="Breadcrumb">
            @yield('breadcrumb')
        </ul>
        <div class="Profile">
            <span class="Profile_name">{{ $username }}</span>
            <a href="{{ URL::route('logout') }}" class="btn -white -light Profile_logout">Déconnexion</a>
        </div>
    </header >
    <main class="Wrapper">
	    @yield('content')
    </main>
@endsection