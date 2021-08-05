<?php
$db = new PDO('mysql:host=db; dbname=pokemon-cards', 'root', 'password');

$db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

if(isset($_POST)) {
    $allPokemonQuery = $db->prepare('INSERT INTO `pokemon-card` (`name`, `cost`, `image`, `rarity`)
                                            VALUES (:pokemonName,:pokemonCost, :pokemonImage,:pokemonRarity )');
    $allPokemonQuery->bindParam(':pokemonName', $_POST['pokemonName']);
    $allPokemonQuery->bindParam(':pokemonCost', $_POST['pokemonCost']);
    $allPokemonQuery->bindParam(':pokemonImage', $_POST['pokemonImage']);
    $allPokemonQuery->bindParam(':pokemonRarity', $_POST['pokemonRarity']);

    $allPokemonQuery->execute();
    header('Location: index.php');
}


