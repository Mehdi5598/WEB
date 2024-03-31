@php
use Carbon\Carbon;
@endphp

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
    <h1>Internships List</h1>
    <a class="create" href="{{ route('internships.create') }}"><button>Create New Internship</button> </a>
    <div>
        <form action="{{ route('internships.index') }}" method="GET">
            <div>
                <input type="text" name="nom" placeholder="Filter by Nom" value="{{ request('nom') }}">
                <input type="text" name="localite" placeholder="Filter by Localite" value="{{ request('localite') }}">
                <input type="text" name="duree" placeholder="Filter by Duree" value="{{ request('duree') }}">
                <input type="text" name="promo" placeholder="Filter by Promo" value="{{ request('promo') }}">
                <input type="text" name="salaire" placeholder="Filter by Salaire" value="{{ request('salaire') }}">
                <input type="text" name="entreprise" placeholder="Filter by Entreprise" value="{{ request('entreprise') }}">
                <input type="date" name="date" placeholder="Filter by Date" value="{{ request('date') }}">
                <input type="text" name="competences" placeholder="Filter by Competences" value="{{ request('competences') }}">
            </div>
            <button type="submit">Apply Filters</button>
        </form>
    </div>

    <table border="1">
        <thead>
            <tr>
                <th>Nom</th>
                <th>Localite</th>
                <th>Duree</th>
                <th>Promo</th>
                <th>Salaire</th>
                <th>Entreprise</th>
                <th>Date</th>
                <th>Competences</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($internships as $internship)
            <tr>
                <td>{{ $internship->nom }}</td>
                <td>{{ $internship->localite }}</td>
                <td>{{ $internship->duree }}</td>
                <td>{{ $internship->promo }}</td>
                <td>{{ $internship->salaire }}</td>
                <td>{{ $internship->entreprise }}</td>
                <td>{{ Carbon::parse($internship->date)->format('Y-m-d') }}</td>
                <td>
                    @foreach ($internship->competences as $competence)
                    <span>{{ $competence->name }}</span>{{ !$loop->last ? ', ' : '' }}
                    @endforeach
                </td>
                <td>
                    <a href="{{ route('internships.edit', $internship->id) }}">Edit</a>
                </td>
                <td>
                    <form action="{{ route('internships.destroy', $internship->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</main>
@endsection
