<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="details.css">
    <title>Details</title>
</head>

<body>
    <header>
        <div class="header">
            <h1>Pokedex</h1>
        </div>
    </header>
    <?php

    $pdo = new PDO('mysql:host=localhost;dbname=pokedex_php', 'root', '');

    if (isset($_GET['numero'])) {
        $numero = $_GET['numero'];
    } else {

        header('Location: pokedex.php');
        exit();
    }


    $query = "SELECT * FROM pokemon WHERE numero = :numero";
    $stmt = $pdo->prepare($query);
    $stmt->bindValue(':numero', $numero);
    $stmt->execute();


    if ($pokemon = $stmt->fetch(PDO::FETCH_ASSOC)) {
        echo '<div class="card-container">';
        echo '<h2>Details de ' . $pokemon['nom'] . '</h2>';
        echo '<div class="container">';
        echo '<img class="image" src="image/' . $pokemon['numero'] . '.png">';
        echo '<div class="card">';
        echo '<h3>#' . $pokemon['numero'] . ' ' . $pokemon['nom'] . '</h3>';
        echo '<p>Statistiques</p>';
        echo '<p>PV ' . $pokemon['pv'] . ' <progress max="255" value="' . $pokemon['pv'] . '"></progress></p>';
        echo '<p>Attaque ' . $pokemon['attaque'] . ' <progress max="255" value="' . $pokemon['attaque'] . '"></progress></p>';
        echo '<p>Defense ' . $pokemon['defense'] . ' <progress max="255" value="' . $pokemon['defense'] . '"></progress></p>';
        echo '<p>Attaque Spé. ' . $pokemon['attaque_spe'] . ' <progress max="255" value="' . $pokemon['attaque_spe'] . '"></progress></p>';
        echo '<p>Defense Spé. ' . $pokemon['defense_spe'] . ' <progress max="255" value="' . $pokemon['defense_spe'] . '"></progress></p>';
        echo '<p>Vitesse ' . $pokemon['vitesse'] . ' <progress max="255" value="' . $pokemon['vitesse'] . '"></progress></p>';
        echo '</div>';
        echo '</div>';
        echo '</div>';
    } else {
        header('Location: pokedex.php');
        exit();
    }
    ?>
    <div class="return-btn-container">
        <a href="index.php" class="return-btn">Retour à la liste</a>
    </div>
</body>

</html>