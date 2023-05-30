<?php

require_once 'src/arrosage.php';

use PHPUNIT\Framework\TestCase;

final class TestArrosage extends TestCase
{
    public function testArrosage():void
    {
        //Arrange
        $plants = [
            ['name'=> 'Ficus', "waterLevel" => 54 ],
            ['name'=> 'Cactus', "waterLevel" => 18 ],
            ['name'=> 'Monstera', "waterLevel" => 37 ],
            ['name'=> 'Plante-paon', "waterLevel" => 23 ],
            ['name'=> 'Aglaonème', "waterLevel" => 68 ],
            ['name'=> 'Echeveria', "waterLevel" => 41 ],
            ['name'=> 'Hortensia', "waterLevel" => 7 ],
        ];

        $expectePlants = [
            ['name'=> 'Ficus', "waterLevel" => 74 ],
            ['name'=> 'Cactus', "waterLevel" => 38 ],
            ['name'=> 'Monstera', "waterLevel" => 57 ],
            ['name'=> 'Plante-paon', "waterLevel" => 43 ],
            ['name'=> 'Aglaonème', "waterLevel" => 88 ],
            ['name'=> 'Echeveria', "waterLevel" => 61 ],
            ['name'=> 'Hortensia', "waterLevel" => 27 ],
        ];

        //Act
        $plants = arroser($plants);

        //Assert

        $this->assertSame($expectePlants, $plants);
    }
}