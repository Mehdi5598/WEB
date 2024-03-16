<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>Formulaire d'Inscription</title>
</head>

<body>
    <h2>Formulaire d'Inscription</h2>
    <form method="post" action="{{route('pilote.index')}}">
        @csrf
        @method('post')
        <label for="nom">Nom :</label>
        <input type="text" name="nom" required><br><br>

        <label for="prenom">Prénom :</label>
        <input type="text" name="prenom" required><br><br>

        <label for="centre">Centre :</label>
        <input type="text" name="centre" required><br><br>

        <label for="promo">Promo :</label>
        <input type="text" name="promo" required><br><br>

        <label for="password">Mot de passe :</label>
        <input type="text" name="password" required><br><br>

        <label for="email">Email :</label>
        <input type="text" name="email" required><br><br>

        <label for="promotion">Promotion :</label>
        <select name="promotion" required>
            <option value="">Veuillez sélectionner</option>
            <option value="A1">A1</option>
            <option value="A2">A2</option>
            <option value="A3">A3</option>
            <option value="A4">A4</option>
            <option value="A5">A5</option>
        </select><br><br>

        <input type="submit" value="Soumettre">
    </form>
</body>

</html>