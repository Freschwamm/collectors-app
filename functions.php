<?php



function pokemonCardContainer(array $allPokemon): string { $pokemonNames = "";
        foreach ($allPokemon as $pokemon) {
            if (!(array_key_exists('name', $pokemon) &&
                array_key_exists('image', $pokemon) &&
                array_key_exists('cost', $pokemon) &&
                array_key_exists('rarity', $pokemon))) {
                return "PLease enter correct information";
            }
            $pokemonNames .=
                '<div class="card-stats">' .
                "<h2> Name: " . $pokemon['name'] . "</h2>" .
                '<img src="' . $pokemon['image'] . '" alt="' . $pokemon['name'] . '">' .
                "<p> Cost: " . $pokemon['cost'] . "</p>" .
                "<p> Rarity: " . $pokemon['rarity'] . "<p/>" . "</div>";
        }
        return $pokemonNames;
    }






