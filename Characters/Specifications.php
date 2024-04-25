<?php

namespace Characters;

class Specifications
{
    protected int $physique;
    protected int $agility;
    protected int $spirit;

    public function __construct(int $physique, int $agility, int $spirit){
        $this->physique = $physique;
        $this->agility = $agility;
        $this->spirit = $spirit;
    }

    public function getPhysique(): int
    {
        return $this->physique;
    }
    public function getAgility(): int
    {
        return $this->agility;
    }
    public function getSpirit(): int
    {
        return $this->spirit;
    }

}