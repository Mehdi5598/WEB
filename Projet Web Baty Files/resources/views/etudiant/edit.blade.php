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
    <h1>edit</h1>
    <form method="post" action="{{ route('Etudiant.update', ['Etudiant' => $Etudiant]) }}">


        @csrf
        @method('PUT')
        <div>
            <label for="Nom_etudiant">name</label>
            <input type="text" name="Nom_etudiant" placeholder="name" value="{{$Etudiant->Nom_etudiant}}" />
        </div>
        <div>
            <label for="Prenom_etudiant">Prenom</label>
            <input type="text" name="Prenom_etudiant" placeholder="Prenom" value="{{$Etudiant->Prenom_etudiant}}" />
        </div>
        <div>
            <label for="Centre">Centre</label>
            <input type="text" name="Centre" placeholder="Centre" value="{{$Etudiant->Centre}}" />
        </div>
        <div>
            <label for="Promotion">Promotion</label>
            <input type="text" name="Promotion" placeholder="Promotion" value="{{$Etudiant->Promotion}}" />
        </div>

        <div>
            <label for="E_mail">Email</label>
            <input type="email" name="E_mail" placeholder="Email" value="{{$Etudiant->E_mail}}" />
        </div>

        <div>
            <label for="password">password</label>
            <input type="password" name="password" placeholder="password" required value="{{$Etudiant->password}}" />
        </div>
        <div>
            <input type="submit" value="update">
        </div>
    </form>
</main>
@endsection