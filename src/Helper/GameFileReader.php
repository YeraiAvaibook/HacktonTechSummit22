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

    private int $processedLines;

    public function __construct(string $path)
    {
        $this->processedLines = 0;
        // Read all file lines
        $lines = FileReader::read($path);

        // First line indicate number of survivors, zombies, items
        $definitions = explode(' ', $lines[0]);
        $this->lineProcessed();

        $this->survivorsQty = $definitions[0];
        $this->zombieQty    = $definitions[1];
        $this->itemQty      = $definitions[2];
        $this->mapSize      = $definitions[3];
        $this->stepQty      = $definitions[4];

        // for the next survivorsQty lines and populate and array of survivors

        for ($i = 0; $i < $this->survivorsQty; $i++) {
            $survivorData = explode(' ', $lines[ $this->processedLines ]);
            $this->lineProcessed();

            $equipmentQty = $survivorData[2];

            $this->survivors[ $i ]['name']        = $survivorData[5];
            $this->survivors[ $i ]['life']        = (int) $survivorData[0];
            $this->survivors[ $i ]['experience']  = (int) $survivorData[1];
            $this->survivors[ $i ]['items']       = [];
            $this->survivors[ $i ]['coordinates'] = [$survivorData[3], $survivorData[4]];


            switch ($equipmentQty) {
                case 1:
                    $this->survivors[ $i ]['items'][] = $this->processSurvivorItem($lines[ $this->processedLines ]);
                    $this->lineProcessed();

                    break;
                case 2:
                    $this->survivors[ $i ]['items'][] = $this->processSurvivorItem($this->processedLines);
                    $this->lineProcessed();

                    $this->survivors[ $i ]['items'][] = $this->processSurvivorItem($this->processedLines);
                    $this->lineProcessed();

                    break;
            }


            print("<pre>" . print_r($this->survivors, true) . "</pre>");
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


    private function lineProcessed(): void
    {
        ++$this->processedLines;
    }

    private function processSurvivorItem($line): array
    {
        $itemData = explode(' ', $line);

        return [
            'name' => $itemData[0],
            'part' => $itemData[1],
        ];
    }


}