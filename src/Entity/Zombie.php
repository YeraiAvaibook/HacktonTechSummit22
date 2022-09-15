<?php

namespace Entity;
class Zombie {

    private string $name;

    private int $coordinateX;

    private int $coordinateY;

    public function __construct(string $name, int $coordinateX, int $coordinateY)
    {
        $this->name = $name;
        $this->coordinateX = $coordinateX;
        $this->coordinateY = $coordinateY;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name)
    {
        $this->name = $name;
    }

    public function getCoordinateX(): int
    {
        return $this->coordinateX;
    }

    public function setCoordinateX(int $coordinateX)
    {
        $this->coordinateX = $coordinateX;
    }

    public function getCoordinateY(): int
    {
        return $this->coordinateY;
    }

    public function setCoordinateY(int $coordinateY)
    {
        $this->coordinateY = $coordinateY;
    }

}