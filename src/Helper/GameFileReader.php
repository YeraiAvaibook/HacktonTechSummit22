<?php

namespace Hackaton\Zombies\Helper;

class GameFileReader
{
    private array $lines;

    private int $survivorsQty;
    private int $zombieQty;
    private int $itemQty;

    private int $stepQty;

    private int $mapSize;
    private array $survivors;
    private array $zombies;
    private array $items;


    public function __construct(string $path) {
        // Read all file lines
        $lines = FileReader::read($path);

        // First line indicate number of survivors, zombies, items
        $definitions = explode(' ', $lines[0]);

        $this->survivorsQty = $definitions[0];
        $this->zombieQty = $definitions[1];
        $this->itemQty = $definitions[2];
        $this->mapSize = $definitions[3];
        $this->stepQty = $definitions[4];

        // for the next survivorsqty lines and populate and array of survivors
        for ($i = 0; $i <= $this->survivorsQty; $i++) {

        }
    }


    private function parseEntity() {

    }



}