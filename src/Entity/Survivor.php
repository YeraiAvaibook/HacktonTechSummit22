<?php

namespace Hackaton\Zombies\Entity;

class Survivor
{
    private string $name;
    private int $life;
    private int $level;
    private int $experience;
    private string $item;
    private string $position;

    public function __construct($name, $life, $level, $experience, $item, $position){
        $this->name = $name;
        $this->life = $life;
        $this->level = $level;
        $this->experience = $experience;
        $this->item = $item;
        $this->position = $position;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getLife()
    {
        return $this->life;
    }

    public function setLife($life)
    {
        $this->life = $life;
    }

    public function getLevel()
    {
        return $this->level;
    }

    public function setLevel($level)
    {
        $this->level = $level;
    }

    public function getExperience()
    {
        return $this->experience;
    }

    public function setExperience($experience)
    {
        $this->experience = $experience;
    }

    public function getItem()
    {
        return $this->item;
    }

    public function setItem($item)
    {
        $this->item = $item;
    }

    public function getPosition()
    {
        return $this->position;
    }

    public function setPosition($position)
    {
        $this->position = $position;
    }
}