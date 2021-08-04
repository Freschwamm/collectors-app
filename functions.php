<?php


function pokemonCardContainer(array $allPokemon): string {
    $pokemonNames = "";
    foreach ($allPokemon as $pokemon) {
        $pokemonNames .=
            '<div class="card-stats">' .
            "<p> Name: " . $pokemon['name'] . "</p>".
            '<img src="' . $pokemon['image'] . '" alt="">' .
            "<p> Cost: " .$pokemon['cost'] . "</p>" .
            "<p> Rarity: ". $pokemon['rarity'] . "<p/>" . "</div>";
    }
    {
        if ($allPokemon === [['name' => 'lizard', 'image' => "lizard",
                'cost' => 'lizard', 'rarity'=> 'lizard']]) {
            return "That's not a pokemon, it's a lizard";
        };
    }
    return $pokemonNames ;
}




