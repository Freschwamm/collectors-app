<?php


function pokemonCardContainer($allPokemon) {
    $pokemonNames = "";
    foreach ($allPokemon as $pokemon) {
        $pokemonNames .= '<div class="card-stats">'
            . "<p>" . $pokemon['name'] . "</p>".
            '<img src="' . $pokemon['image'] . '" alt="">' .
            "<p>" .$pokemon['cost'] . "</p>".
             $pokemon['rarity'] . "</div>";
    }
    return $pokemonNames ;
}




