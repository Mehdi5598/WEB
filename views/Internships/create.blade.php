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
    <h1>Create Internship</h1>
    <form method="post" action="{{ route('internships.store') }}">
        @csrf
        @method('post')

        <label for="nom">Nom :</label>
        <input type="text" name="nom" required><br><br>

        <label for="competences">Competences requises:</label>
        <select name="competences[]" multiple required>
            @foreach ($competences as $competence)
            <option value="{{ $competence->id }}">{{ $competence->name }}</option>
            @endforeach
        </select><br><br>

        <label for="localite">Localité :</label>
        <input type="text" name="localite" required><br><br>

        <label for="entreprise">Entreprise :</label>
        <input type="text" name="entreprise" required><br><br>

        <label for="promotion">Promotions concernées :</label>
        <input type="number" name="promo" required><br><br>

        <label for="duree">Durée du stage :</label>
        <input type="number" name="duree" required><br><br>

        <label for="salary">Base de rémunération :</label>
        <input type="number" name="salaire" required><br><br>

        <label for="date">Date de l'offre :</label>
        <input type="date" name="date" required><br><br>

        <label for="numberPlace">Nombre de places offertes aux étudiants :</label>
        <input type="number" name="number_place" required><br><br>

        <input type="submit" value="Soumettre">
    </form>
</main>

@endsection