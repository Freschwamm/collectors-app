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
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Press+Start+2P&family=Roboto:wght@700&display=swap" rel="stylesheet">
    <meta charset="utf-8">
</head>
<body>
 <h1>Pokemon Cards</h1>
 <div>
     <?php echo pokemonCardContainer($allPokemon) ?>
 </div>
 <div>
     <form action="validation.php" method="post">
         <input type="text" placeholder="Input pokemon name" name="pokemonName" id="nameOfPokemon" >
         <label for="nameOfPokemon">Name</label>
         <input type="text" placeholder="Input card cost" name="pokemonCost" id="costOfCard" >
         <label for="costOfCard">Cost</label>
         <input type="text" placeholder="Input pokemon card image link" name="pokemonImage" id="cardImage" >
         <label for="cardImage">Image</label>
         <input type="text" placeholder="Input card rarity" name="pokemonRarity" id="rarityOfCard" >
         <label for="rarityOfCard">Rarity</label>
         <input type="submit" name="submit" value="submit">
     </form>
 </div>
 <div>
     <p class="tagline">Gotta Catch 'Em All</p>
 </div>

</body>
</html>

