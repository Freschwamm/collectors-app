<?php

require_once 'functions.php';

$db = new PDO('mysql:host=db; dbname=pokemon-cards', 'root', 'password');

$db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

$query = $db->prepare('SELECT * FROM `pokemon-card`;');

$query->execute();

$allPokemon = $query->fetchAll();



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
     <form action="validation.php" method="post">
         <input type="text" placeholder="Input pokemon name" name="pokemonName" id="nameOfPokemon" required>
         <label for="nameOfPokemon">Name</label>
         <input type="text" placeholder="Input card cost" name="pokemonCost" id="costOfCard" required>
         <label for="costOfCard">Cost</label>
         <input type="text" placeholder="Input pokemon card image link" name="pokemonImage" id="cardImage" required>
         <label for="cardImage">Image</label>
         <input type="text" placeholder="Input card rarity" name="pokemonRarity" id="rarityOfCard" required>
         <label for="rarityOfCard">Rarity</label>
         <input type="submit" name="submit" value="submit">
     </form>
 </div>

</body>
</html>

