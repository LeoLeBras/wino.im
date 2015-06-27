@extends('dashboard/layout-assistance')

@section('breadcrumb')
    <li class="Breadcrumb_item"><a href="{{ URL::route('dashboard.assistance.index') }}" class="Breadcrumb_link">Accueil</a></li> 
@endsection

@section('content')
    <div class="Faq_section">
        <h2 class="Wrapper_title Faq_title">Tableau de bord</h2>
        @foreach($faq[0] as $key => $value)
            <a href="{{ URL::route('dashboard.assistance.question', [0, $key]) }}" class="Faq_link">{{ $value }}</a>
        @endforeach
    </div>
    <div class="Faq_section -contact">
        <h2 class="Wrapper_title Faq_title">Nous contacter</h2>
        <p class="Faq_text">
            Nous sommes à votre écoute si vous avez une question ou tout simplement besoins d'un renseignement.<br>
            Vous pouvez nous contactez à l'adresse suivante : <span class="Faq_email">hello@wino.im</span>. Nous vous répondrons dans les plus brefs délais (sous 24h).
            <a href="mailto:hello@wino.im" class="btn -blue -small Faq_mailto">Envoyer un mail</a>
        </p>
    </div>
    <div class="Faq_section -account">
        <h2 class="Wrapper_title Faq_title">Compte utilisateur</h2>
        @foreach($faq[1] as $key => $value)
            <a href="{{ URL::route('dashboard.assistance.question', [1, $key]) }}" class="Faq_link">{{ $value }}</a>
        @endforeach
    </div>
    <div class="Faq_section">
        <h2 class="Wrapper_title Faq_title">Autres</h2>
        @foreach($faq[2] as $key => $value)
            <a href="{{ URL::route('dashboard.assistance.question', [2, $key]) }}" class="Faq_link">{{ $value }}</a>
        @endforeach
    </div>
@endsection
