@extends('dashboard/layout-assistance')

@section('breadcrumb')
    <li class="Breadcrumb_item"><a href="{{ URL::route('dashboard.assistance.index') }}" class="Breadcrumb_link">FAQ</a></li>
    <li class="Breadcrumb_item"><a href="{{ URL::route('dashboard.assistance.question', [$faq['category_id'], $faq['id']]) }}" class="Breadcrumb_link">{{ $faq['question'] }}</a></li> 
@endsection

@section('content')
    <div><a href="{{ URL::route('dashboard.assistance.index') }}" class="btn -small">Revenir à la FAQ</a></div>
    <div class="Faq_item">
        <h2 class="Wrapper_title Faq_title">{{ $faq['question'] }}</h2>
        <p class="Faq_text">
            {{ $faq['answer'] }}
        </p>
    </div>
    <div class="Faq_section -small-contact">
        <h2 class="Wrapper_title Faq_title">Nous contacter</h2>
        <p class="Faq_text">
            Nous sommes à votre écoute si vous avez une question ou tout simplement besoins d'un renseignement.
            Vous pouvez nous contactez à l'adresse suivante : <span class="Faq_email">hello@wino.im</span>. Nous vous répondrons dans les plus brefs délais (sous 24h).
        </p>
        <a href="mailto:hello@wino.im" class="btn -blue -extra-small Faq_mailto">Envoyer un mail</a>
    </div>
@endsection
