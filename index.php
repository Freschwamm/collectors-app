<?php

require_once 'functions.php';

$db = new PDO('mysql:host=db; dbname=pokemon-cards', 'root', 'password');

$db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

$query = $db->prepare('SELECT * FROM `pokemon-card`;');

$query->execute();

$allPokemon = $query->fetchAll();

$allPokemonQuery = $db->prepare('INSERT INTO `pokemon-card` (`name`, `cost`, `image`, `rarity`)
                                            VALUES ($_POST[pokemonName],
                                                    $_POST[pokemonCost], 
                                                    $_POST[pokemonImage], 
                                                    $_POST[pokemonRarity] )');
$allPokemonQuery->execute();

?>

<html lang="en">
<head>
    <title>Pokemon Card Collection</title>
    <link rel="stylesheet" href="styles.css">
    <meta charset="utf-8">
</head>
<body>
 <h1>Pokemon Cards</h1>
 <div>
 <?php echo pokemonCardContainer($allPokemon) ?>
 </div>
 <div>
     <form action="index.php" method="post">
         <input type="text" placeholder="Input pokemon name" name="pokemonName">
         <input type="text" placeholder="Input card cost" name="pokemonCost">
         <input type="text" placeholder="Input pokemon card image link" name="pokemonImage">
         <input type="text" placeholder="Input card rarity" name="pokemonRarity">
         <input type="submit">

     </form>
 </div>

</body>
</html>

