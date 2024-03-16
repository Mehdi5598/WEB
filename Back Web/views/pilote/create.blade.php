<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>create page</h1>

    <form method="post" action="{{route('pilote.store')}}">
        @csrf
        @method('post')
        <label for="nom">Nom :</label>
        <input type="text" name="nom" required><br><br>

        <label for="prenom">Prénom :</label>
        <input type="text" name="prenom" required><br><br>

        <label for="centre">Centre :</label>
        <input type="text" name="centre" required><br><br>

        <input type="submit" value="Soumettre">
    </form>
</body>

</html>