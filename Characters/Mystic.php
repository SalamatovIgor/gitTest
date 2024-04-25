<?php

namespace Characters;

class Mystic extends Magician
{
    protected string $typeOfDeity;
    protected int $loyaltyToGod;

    public function __construct(int $physique, int $agility, int $spirit, int $regenerationMana, string $typeOfMantle, string $typeOfDeity, int $loyaltyToGod)
    {
        parent::__construct($physique, $agility, $spirit, $regenerationMana, $typeOfMantle);
        $this->typeOfDeity = $typeOfDeity;
        $this->loyaltyToGod = $loyaltyToGod;
    }

    public function getTypeOfDeity(): string
    {
        return $this->typeOfDeity;
    }
    public function getLoyaltyToGod(): int
    {
        return $this->loyaltyToGod;
    }
}