<?php

require '../functions.php';

use PHPUnit\Framework\TestCase;

class Functions extends TestCase
{
    public function testSuccessPokemonCardContainer()
    {
        $expectedOutput =
            '<div class="card-stats">' .
            '<p> Name: Charizard</p>' .
            '<img src="https://product-images.tcgplayer.com/fit-in/400x558/42382.jpg" alt="">' .
            '<p> Cost: $300</p>' .
            '<p> Rarity: Holo Rare<p/>' . '</div>';
        $input = [['name' => 'Charizard', 'image' => "https://product-images.tcgplayer.com/fit-in/400x558/42382.jpg",
            'cost' => '$300', 'rarity'=> 'Holo Rare']];
        $actualOutput = pokemonCardContainer($input);
        //what makes the test flag up as passed or failed
        $this->assertEquals($expectedOutput, $actualOutput);
    }
}