<style>
    .create>a {
        text-decoration: none;
        color: inherit;
    }

    .Edit {
        text-decoration: none;
        color: inherit;
    }

    table {
        width: 100%;
        border-collapse: collapse;
        margin-top: 20px;
        margin-bottom: 30px;
    }

    input[type="text"] {
        background-color: #2b2f3a;
        border: 1px solid #3f4860;
        border-radius: 5px;
        color: white;
        padding: 10px;
        margin: 5px 0;
        width: calc(100% - 22px);
    }

    .Edit button {
        background-color: rgba(35, 166, 240, 1);
        color: white;
        border: none;
        padding: 10px 20px;
        border-radius: 10px;
        font-family: 'Trebuchet MS', sans-serif;
        font-size: 16px;
        cursor: pointer;
        transition: background-color 0.3s ease;
    }

    .Edit button:hover {
        background-color: rgba(35, 166, 240, 0.8);
    }
</style>
@extends('layouts.layout')
@section('content')
<main>
    <h1>Gestion des Pilotes</h1>
    <div>
        @if(session()->has('success'))
        <div>
            {{ session('success') }}
        </div>
        @endif
    </div>

    <div class="create">
        <a href=" {{ route('pilote.create') }}"><button>Create New Pilote</button></a>
    </div>
    <div>
        <form action="{{ route('pilote.main') }}" method="GET">
            <div>
                <input type="text" name="nom" placeholder="Filter by Nom" value="{{ request('nom') }}">
                <input type="text" name="prenom" placeholder="Filter by Prenom" value="{{ request('prenom') }}">
                <input type="text" name="centre" placeholder="Filter by Centre" value="{{ request('centre') }}">
                <input type="text" name="promo" placeholder="Filter by Promo" value="{{ request('promo') }}">
            </div>
            <button type="submit">Apply Filters</button>
        </form>
    </div>
    <table border="1">
        <thead>
            <tr>
                <th>Nom</th>
                <th>Prenom</th>
                <th>Centre</th>
                <th>Promo</th>
            </tr>
        </thead>
        <tbody>
            @foreach($pilotes as $pilote)
            <tr>
                <td>{{ $pilote->nom }}</td>
                <td>{{ $pilote->prenom }}</td>
                <td>{{ $pilote->centre }}</td>
                <td>{{ $pilote->promo }}</td>
                <td class="Edit"><a href="{{ route('pilote.edit', ['pilote' => $pilote]) }}"><button>Edit</button></a></td>
                <td>
                    <form method="POST" action="{{ route('pilote.destroy', ['pilote' => $pilote]) }}">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

    <div>
        {{ $pilotes->withQueryString()->links() }}
    </div>

    @endsection