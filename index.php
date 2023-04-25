<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Pokedex</title>
</head>

<body>
    <header>
        <div class="header">
            <h1>Pokedex</h1>
        </div>
    </header>
    <div class="card-container">
        <?php
        // Établir une connexion à la base de données
        $pdo = new PDO('mysql:host=localhost;dbname=pokedex_php', 'root', '');

        // Requête SQL pour extraire les données des noms et des numéros de Pokémon
        $query = "SELECT nom, numero FROM pokemon";
        $result = $pdo->query($query);

        // Afficher chaque Pokémon dans une carte
        while ($pokemon = $result->fetch(PDO::FETCH_ASSOC)) {
            echo '<div class="card">';
            echo '<a href="pokemon-details.php?numero=' . $pokemon['numero'] . '">';
            echo '<img src="image/' . $pokemon['numero'] . '.png">';
            echo '<p>#' . $pokemon['numero'] . ' ' . $pokemon['nom'] . '</p>';
            echo '</div>';
        }
        ?>
    </div>
</body>

</html>