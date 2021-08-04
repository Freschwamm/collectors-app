<?php



function pokemonCardContainer(array $allPokemon): string {
    $pokemonNames = "";
    foreach ($allPokemon as $pokemon) {
        $pokemonNames .=
            '<section class="card-stats">' .
            "<h2> Name: " . $pokemon['name'] . "</h2>".
            '<img src="' . $pokemon['image'] . '" alt="' . $pokemon['name'] . '">' .
            "<p> Cost: " .$pokemon['cost'] . "</p>" .
            "<p> Rarity: ". $pokemon['rarity'] . "<p/>" . "</section>";
    }
    {
        if ($allPokemon === [['name' => 'lizard', 'image' => "lizard",
                'cost' => 'lizard', 'rarity'=> 'lizard']]) {
            return "That's not a pokemon, it's a lizard";
        };
    }
    return $pokemonNames ;
}




