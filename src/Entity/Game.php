<?php

namespace Hackaton\Zombies\Entity;

use Hackaton\Zombies\Helper\GameFileReader;

class Game
{
    private GameFileReader $gameFileReader;

    public function __construct(GameFileReader $gameFileReader)
    {
        $this->gameFileReader = $gameFileReader;
    }


    /*foreach ($this->gameFileReader->getSurvivors() as $survivor) {
        new Survivor
    }*/
}