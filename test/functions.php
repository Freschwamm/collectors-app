<?php

require '../functions.php';

use PHPUnit\Framework\TestCase;

class Functions extends TestCase
{
    public function testSuccessPokemonCardContainer()
    {
        $expectedOutput =
            '<div class="card-stats">' .
            '<h2> Name: Charizard</h2>' .
            '<img src="https://product-images.tcgplayer.com/fit-in/400x558/42382.jpg" alt="Charizard">' .
            '<p> Cost: $300</p>' .
            '<p> Rarity: Holo Rare<p/>' . '</div>';
        $input = [['name' => 'Charizard', 'image' => "https://product-images.tcgplayer.com/fit-in/400x558/42382.jpg",
            'cost' => '$300', 'rarity'=> 'Holo Rare']];
        $actualOutput = pokemonCardContainer($input);

        $this->assertEquals($expectedOutput, $actualOutput);
    }


    public function testFailurePokemonCardContainer()
    {
        $expectedOutput = "PLease enter correct information";
        $input = [['name' => 'lizard', 'image' => "lizard",
            'cost' => 'lizard']];
        $actualOutput = pokemonCardContainer($input);

        $this->assertEquals($expectedOutput, $actualOutput);
    }
    public function testMalformedPokemonCardContainer()
    {
        $input = 3;
        $this->expectException(TypeError::class);
        $output = pokemonCardContainer($input);
    }
}
