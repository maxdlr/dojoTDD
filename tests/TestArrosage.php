<?php

require_once 'src/arrosage.php';

use PHPUnit\Framework\TestCase;

final class TestArrosage extends TestCase
{
    public function testArrosage():void
    {
        //Arrange
        $plants = [
            ['name'=> 'Ficus', "waterLevel" => 54, "minimum" => 86],
            ['name'=> 'Cactus', "waterLevel" => 18 ],
            ['name'=> 'Monstera', "waterLevel" => 37 ],
            ['name'=> 'Plante-paon', "waterLevel" => 23, "minimum" => 25],
            ['name'=> 'Aglaonème', "waterLevel" => 68 ],
            ['name'=> 'Echeveria', "waterLevel" => 41 ],
            ['name'=> 'Hortensia', "waterLevel" => 7, "minimum" => 52],
        ];

        $expectedPlants = [
            ['name'=> 'Ficus', "waterLevel" => 86],
            ['name'=> 'Cactus', "waterLevel" => 38 ],
            ['name'=> 'Monstera', "waterLevel" => 57 ],
            ['name'=> 'Plante-paon', "waterLevel" => 43],
            ['name'=> 'Aglaonème', "waterLevel" => 88 ],
            ['name'=> 'Echeveria', "waterLevel" => 61 ],
            ['name'=> 'Hortensia', "waterLevel" => 52],
        ];

        //Act
        $plants = arroser($plants);

        //Assert
        $this->assertSame($expectedPlants[0]['WaterLevel'], $plants[0]['WaterLevel']);
        $this->assertSame($expectedPlants[1]['WaterLevel'], $plants[1]['WaterLevel']);
        $this->assertSame($expectedPlants[2]['WaterLevel'], $plants[2]['WaterLevel']);
        $this->assertSame($expectedPlants[3]['WaterLevel'], $plants[3]['WaterLevel']);
        $this->assertSame($expectedPlants[4]['WaterLevel'], $plants[4]['WaterLevel']);
        $this->assertSame($expectedPlants[5]['WaterLevel'], $plants[5]['WaterLevel']);
        $this->assertSame($expectedPlants[6]['WaterLevel'], $plants[6]['WaterLevel']);
        $this->assertSame($expectedPlants[7]['WaterLevel'], $plants[7]['WaterLevel']);

    }
}