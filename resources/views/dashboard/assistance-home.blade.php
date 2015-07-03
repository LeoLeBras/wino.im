@extends('dashboard/layout-assistance')

@section('breadcrumb')
    <li class="Breadcrumb_item"><a href="{{ URL::route('dashboard.assistance.index') }}" class="Breadcrumb_link">Accueil</a></li>
@endsection

@section('content')
    @foreach($faq as $group)
    @if($group['id'] == 2)
    <div class="Faq_section -contact">
        <h2 class="Wrapper_title Faq_title">Nous contacter</h2>
        <p class="Faq_text">
            Nous sommes à votre écoute si vous avez une question ou tout simplement besoins d'un renseignement.<br>
            Vous pouvez nous contactez à l'adresse suivante : <span class="Faq_email">hello@wino.im</span>. Nous vous répondrons dans les plus brefs délais (sous 24h).
            <a href="mailto:hello@wino.im" class="btn -blue -small Faq_mailto">Envoyer un mail</a>
        </p>
    </div>
    @endif
    <div class="Faq_section">
        <h2 class="Wrapper_title Faq_title">{{ $group['name'] }}</h2>
        @foreach($group['items'] as $item)
            <a href="{{ URL::route('dashboard.assistance.question', [$group['id'], $item['id']]) }}" class="Faq_link">{{ $item['question'] }}</a>
        @endforeach
    </div>
    @endforeach
@endsection
