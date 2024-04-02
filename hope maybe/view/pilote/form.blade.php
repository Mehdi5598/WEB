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
   <form method="POST" action="{{route('pilote.create')}}">
    @csrf
    @method('post')
    <div>
        <label for="Nom_pilote">Nom</label>
        <input type="text" name="Nom_pilote" placeholder="Nom"/>
    </div>
    <div>
        <label for="Prenom_pilote">Prenom</label>
        <input type="text" name="Prenom_pilote" placeholder="Prenom"/>
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
        <input type="email" name="email" placeholder="Email"/>
    </div>
    <div>
        <label for="password">Password</label>
        <input type="password" name="password" placeholder="Password" required/>
    </div>
    <div>
        <input type="submit" value="Create">
    </div>
</form>


   

</body>
</html>