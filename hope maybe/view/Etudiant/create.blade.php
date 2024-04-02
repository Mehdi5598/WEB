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
@extends('D.student')
@section('content')
    
    <main>
        <h1>Create Etudiant</h1>
        <form method="POST" action="{{route('Etudiant.store')}}">
         @csrf
         @method('POST')
         <div>
             <label for="Nom_etudiant">Nom</label>
             <input type="text" name="Nom_etudiant" placeholder="Nom"/>
         </div>
         <div>
             <label for="Prenom_etudiant">Prenom</label>
             <input type="text" name="Prenom_etudiant" placeholder="Prenom"/>
         </div>
         <div>
             <label for="Centre">Centre</label>
             <input type="text" name="Centre" placeholder="Centre"/>
         </div>
         <div>
             <label for="Promotion">Promo</label>
             <input type="text" name="Promotion" placeholder="Promo"/>
         </div>
         <div>
             <label for="email">Email</label>
             <input type="email" name="email" placeholder="email"/>
         </div>
         <div>
             <label for="password">Password</label>
             <input type="password" name="password" placeholder="Password" required/>
         </div>
         <div>
             <input type="submit" value="Create">
         </div>
     </form>

    </main>
    @endsection
