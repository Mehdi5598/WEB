<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>edit page</h1>

    <form method="post" action="{{route('pilote.update', ['pilote' => $pilote])}}">
        @csrf
        @method('put')
        <label for="nom">Nom :</label>
        <input type="text" name="nom" value="{{$pilote->nom}}"><br><br>

        <label for="prenom">Prénom :</label>
        <input type="text" name="prenom" value="{{$pilote->prenom}}"><br><br>

        <label for="centre">Centre :</label>
        <input type="text" name="centre" value="{{$pilote->centre}}"><br><br>

        <input type="submit" value="modifier">
    </form>
</body>

</html>