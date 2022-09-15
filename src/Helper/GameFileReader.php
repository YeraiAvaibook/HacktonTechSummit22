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
        $processedLines = 1;
        $lines = FileReader::read($path);

        // First line indicate number of survivors, zombies, items
        $definitions = explode(' ', $lines[0]);

        $this->survivorsQty = $definitions[0];
        $this->zombieQty = $definitions[1];
        $this->itemQty = $definitions[2];
        $this->mapSize = $definitions[3];
        $this->stepQty = $definitions[4];

        // for the next survivorsQty lines and populate and array of survivors
        for ($i = 0; $i <= $this->survivorsQty; $i++) {
            $survivor = $lines[$processedLines];
            print("<pre>".print_r($survivor,true)."</pre>");


            $processedLines++;
        }
    }

    public function getLines()
    {
        return $this->lines;
    }

    public function setLines($lines)
    {
        $this->lines = $lines;
    }

    public function getSurvivors()
    {
        return $this->survivors;
    }

    public function setSurvivors($survivors)
    {
        $this->survivors = $survivors;
    }

    public function getZombies()
    {
        return $this->zombies;
    }

    public function setZombies($zombies)
    {
        $this->zombies = $zombies;
    }

    public function getItems()
    {
        return $this->items;
    }

    public function setItems($items)
    {
        $this->items = $items;
    }


    private function parseEntity() {

    }



}