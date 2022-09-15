<?php

namespace Hackaton\Zombies\Entity;

use Hackaton\Zombies\Helper\GameFileReader;

class Game
{
    private array $survivors;
    private array $zombies;
    private array $items;

    public function __construct(GameFileReader $gameFileReader)
    {
        $this->survivors = $gameFileReader->getSurvivors();
        $this->zombies = $gameFileReader->getZombies();
        $this->items = $gameFileReader->getItems();
    }


    


}