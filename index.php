<?php

$db = new PDO('mysql:host=db; dbname=pokemon-cards', 'root', 'password');

$db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

$query = $db->prepare('SELECT * FROM `pokemon-card`;');

$query->execute();

$allPokemon = $query->fetchAll();

require_once 'functions.php';

?>


<head>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
 <h1>Pokemon Cards</h1>
 <div>
 <?php echo pokemonCardContainer($allPokemon) ?>
 </div>


</body>
