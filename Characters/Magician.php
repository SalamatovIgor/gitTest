<?php

namespace Characters;

class Magician extends Specifications
{
    protected int $regenerationMana;
    protected string $typeOfMantle;

    public function __construct(int $physique, int $agility, int $spirit, int $regenerationMana, string $typeOfMantle)
    {
        parent::__construct($physique, $agility, $spirit);
        $this->regenerationMana = $regenerationMana;
        $this->typeOfMantle = $typeOfMantle;
    }

    public function getRegenerationMana(): int
    {
        return $this->regenerationMana;
    }
    public function getTypeOfMantle(): string
    {
        return $this->typeOfMantle;
    }
}