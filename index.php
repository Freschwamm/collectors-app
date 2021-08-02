<?php


$db = new PDO('mysql:host=db; dbname=pokemon-cards', 'root', 'password');

$db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

$query = $db->prepare('SELECT * FROM `pokemon-card`;');

$query->execute();

$allPokemon = $query->fetchAll();



foreach($allPokemon as $pokemon) {
    echo "<p>" . $pokemon['name'] . "</p>";
    echo '<img src="' . $pokemon['image'] . '" alt="">';
    echo "<p>" . $pokemon['cost'] . "</p>";
    echo "<p>" . $pokemon['rarity'] . "</p>";
}




?>

<html>
<head>

</head>
<body>
 <div >

 </div>
</body>
</html>