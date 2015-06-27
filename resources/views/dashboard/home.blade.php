@extends('dashboard/layout-backoffice')

@section('breadcrumb')
    <li class="Breadcrumb_item"><a href="{{ URL::route('backoffice.index') }}" class="Breadcrumb_link">Accueil</a></li> 
@endsection

@section('content')
	<h2 class="Wrapper_title">Mes vins</h2>
    <div class="Control">
        <a href="{{ URL::route('dashboard.wine.add') }}" class="Control_add btn -blue">Ajouter</a>
    </div>
    @if(Session::has('response'))
        <div class="alerts">
            @if(Session::get('response') == 'wine-added')
                <div class="alert -success">
                    Le vin a bien été ajouté à la base de donnée !
                </div>
            @elseif(Session::get('response') == 'wine-deleted')
                <div class="alert -success">
                    Le vin a bien été supprimé de la base de donnée !
                </div>
            @elseif(Session::get('response') == 'wine-updated')
                <div class="alert -success">
                    Le vin a bien été mis à jour dans la base de donnée !
                </div>
            @endif
        </div>
    @endif
    <table class="List">
        <thead class="List_header">
            <tr>
                <th class="List_header_item -name">Nom</th>
                <th class="List_header_item">Type</th>
                <th class="List_header_item">Année</th>
                <th class="List_header_item">Pays</th>
                <th class="List_header_item">Région</th>
                <th class="List_header_item">Prix</th>
                <th class="List_header_item">Stock</th>
                <th class="List_header_item -action"></th>
            </tr>
        </thead>
        <tbody>
            @foreach($wines as $wine)
            <tr class="List_item">
                <td class="List_item_value -name">{{ $wine->name }}</td>
                <td class="List_item_value -color -{{ $wine->color }}"></td>
                <td class="List_item_value">{{ $wine->year }}</td>
                <td class="List_item_value">France</td>
                <td class="List_item_value">{{ $wine->region }}</td>
                <td class="List_item_value">{{ $wine->price }}</td>
                <td class="List_item_value">{{ $wine->stock }}</td>
                <td class="List_item_value -action">
                    <a class="-update" href="{{ URL::route('dashboard.wine.update', $wine->id) }}">Modifier</a>
                    <a class="-delete" href="{{ URL::route('dashboard.wine.remove', $wine->id) }}"></a>
                </td>
            </tr>
            @endforeach            
        </tbody>
    </table>
@endsection
