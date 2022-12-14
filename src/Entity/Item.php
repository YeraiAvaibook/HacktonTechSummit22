<?php

namespace Hackaton\Zombies\Entity;

class Item
{
    private string $name;
    private string $position;

    public function __construct(string $name, string $position)
    {
        $this->name = $name;
        $this->position = $position;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;

        return $this->name;
    }

    public function getPosition()
    {
        return $this->position;
    }

    public function setPosition($position)
    {
        $this->position = $position;

        return $this->position;
    }
}