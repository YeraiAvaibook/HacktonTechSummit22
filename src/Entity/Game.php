<?php

namespace Entity;

use Hackaton\Zombies\Helper\GameFileReader;

class Game
{
    private $gameFileReader;

    public function __construct(GameFileReader $gameFileReader)
    {
        $this->gameFileReader = $gameFileReader;
    }
}