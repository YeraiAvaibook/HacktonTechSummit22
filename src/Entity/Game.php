<?php

namespace Entity;

use Hackaton\Zombies\Helper\GameFileReader;

class Game
{
    private GameFileReader $gameFileReader;

    public function __construct(GameFileReader $gameFileReader)
    {
        $this->gameFileReader = $gameFileReader;
        var_dump($this->gameFileReader->getSurvivors());
    }


    /*foreach ($this->gameFileReader->getSurvivors() as $survivor) {
        new Survivor
    }*/
}