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

    input[type="text"],
    input[type="submit"] {
        background-color: #2b2f3a;
        border: 1px solid #3f4860;
        border-radius: 5px;
        color: white;
        padding: 10px;
        margin: 5px 0;
        width: calc(100% - 22px);
    }

    input[type="submit"] {
        background-color: rgba(35, 166, 240, 1);
        cursor: pointer;
        transition: background-color 0.3s ease;
    }

    input[type="submit"]:hover {
        background-color: rgba(35, 166, 240, 0.8);
    }
</style>
@extends('layouts.layout')
@section('content')

<main>
    <h1>Edit Internship</h1>

    @if ($errors->any())
    <div>
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    <form action="{{ route('internships.update', $internship->id) }}" method="post">
        @csrf
        @method('PUT')

        <label for="nom">Nom :</label>
        <input type="text" name="nom" id="nom" value="{{ $internship->nom }}" required><br><br>

        <label for="competences">Competences requises:</label>
        <select name="competences[]" id="competences" multiple required>
            @foreach($competences as $competence)
            <option value="{{ $competence->id }}" {{ in_array($competence->
                id, $internship->competences->pluck('id')->toArray()) ? 'selected' : '' }}>
                {{ $competence->name }}
            </option>
            @endforeach
        </select><br><br>

        <label for="localite">Localité :</label>
        <input type="text" name="localite" id="localite" value="{{ $internship->localite }}" required><br><br>

        <label for="entreprise">Entreprise :</label>
        <input type="text" name="entreprise" id="entreprise" value="{{ $internship->entreprise }}" required><br><br>

        <label for="promo">Promotions concernées :</label>
        <input type="number" name="promo" id="promo" value="{{ $internship->promo }}" required><br><br>

        <label for="duree">Durée du stage :</label>
        <input type="number" name="duree" id="duree" value="{{ $internship->duree }}" required><br><br>

        <label for="salaire">Base de rémunération :</label>
        <input type="number" name="salaire" id="salaire" value="{{ $internship->salaire }}" required><br><br>

        <label for="date">Date de l'offre :</label>
        <input type="date" name="date" id="date" value="{{ \Carbon\Carbon::parse($internship->date)->format('Y-m-d') }}" required>

        <label for="number_place">Nombre de places offertes aux étudiants :</label>
        <input type="number" name="number_place" id="number_place" value="{{ $internship->number_place }}" required><br><br>

        <input type="submit" value="Update">
    </form>

    <a href="{{ route('internships.index') }}">Back to List</a>
</main>