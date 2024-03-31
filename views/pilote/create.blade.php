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
    <h1>Create Pilote</h1>

    <form method="post" action="{{route('pilote.store')}}">
        @csrf
        @method('post')
        <label for="nom">Nom :</label>
        <input type="text" name="nom" required><br><br>

        <label for="prenom">Prénom :</label>
        <input type="text" name="prenom" required><br><br>

        <label for="centre">Centre :</label>
        <input type="text" name="centre" required><br><br>


        <label for="promo">Promotion assigne :</label>
        <input type="text" name="promo" required><br><br>

        <input type="submit" value="Soumettre">
    </form>
</main>

@endsection