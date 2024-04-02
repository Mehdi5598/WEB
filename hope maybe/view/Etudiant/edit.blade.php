<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
   <h1>edit</h1>
        <form method="post" action="{{ route('Etudiant.update', ['Etudiant' => $Etudiant]) }}">


    @csrf
    @method('PUT')
    <div>
        <label for="Nom_etudiant">name</label>
        <input type="text" name="Nom_etudiant" placeholder="name" value="{{$Etudiant->Nom_etudiant}}"/>
    </div>
    <div>
        <label for="Prenom_etudiant">Prenom</label>
        <input type="text" name="Prenom_etudiant" placeholder="Prenom" value="{{$Etudiant->Prenom_etudiant}}"/>
    </div>
    <div>
        <label for="Centre">Centre</label>
        <input type="text" name="Centre" placeholder="Centre" value="{{$Etudiant->Centre}}"/>
    </div>
    <div>
        <label for="Promotion">Promotion</label>
        <input type="text" name="Promotion" placeholder="Promotion" value="{{$Etudiant->Promotion}}"/>
    </div>

    <div>
        <label for="E_mail">Email</label>
        <input type="email" name="E_mail" placeholder="Email"  value="{{$Etudiant->E_mail}}"/>
    </div>
   
    <div>
        <label for="password">password</label>
        <input type="password" name="password" placeholder="password" required value="{{$Etudiant->password}}"/>
    </div>
    <div>
        <input type="submit" value="update">
    </div>
   </form>
</body>
</html>