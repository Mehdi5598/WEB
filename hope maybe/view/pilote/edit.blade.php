<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
   <h1>Create pilot</h1>
        <form method="post" action="{{ route('pilote.update', ['pilote' => $pilote]) }}">


    @csrf
    @method('PUT')
    <div>
        <label for="Nom_pilote">name</label>
        <input type="text" name="Nom_pilote" placeholder="name" value="{{$pilote->Nom_pilote}}"/>
    </div>
    <div>
        <label for="Prenom_pilote">Prenom</label>
        <input type="text" name="Prenom_pilote" placeholder="Prenom_pilote" value="{{$pilote->Prenom_pilote}}"/>
    </div>
    <div>
        <label for="Centre">Centre</label>
        <input type="text" name="Centre" placeholder="Centre" value="{{$pilote->Centre}}"/>
    </div>
    <div>
        <label for="Promotion">Promotion</label>
        <input type="text" name="Promotion" placeholder="Promotion" value="{{$pilote->Promotion}}"/>
    </div>

    <div>
        <label for="E_mail">Email</label>
        <input type="email" name="E_mail" placeholder="Email"  value="{{$pilote->E_mail}}"/>
    </div>
   
    <div>
        <label for="password">password</label>
        <input type="password" name="password" placeholder="password" required value="{{$pilote->password}}"/>
    </div>
    <div>
        <input type="submit" value="update">
    </div>
   </form>
</body>
</html>