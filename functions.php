<?php


function pokemonCardContainer($allPokemon) {
    $pokemonNames = "";
    foreach ($allPokemon as $pokemon) {
        $pokemonNames .=
            '<div class="card-stats">' .
            "<p> Name: " . $pokemon['name'] . "</p>".
            '<img src="' . $pokemon['image'] . '" alt="">' .
            "<p> Cost: " .$pokemon['cost'] .
            "</p> Rarity: ". $pokemon['rarity'] . "</div>";
    }
    return $pokemonNames ;
}




