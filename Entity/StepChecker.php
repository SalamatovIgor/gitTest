<?php

namespace Entity;

use Const\Constant;

class StepChecker extends StateCookie
{
    protected int $protection;
    protected int $blockChance;

    public function __construct(int $physique, int $agility, int $spirit, string $armor,
                                int $regenerationHealths, int $protection, int $blockChance)
    {
        parent::__construct($physique, $agility, $spirit, $armor, $regenerationHealths);
        $this->protection = $protection;
        $this->blockChance = $blockChance;
    }

    public function getProtection(): string
    {
        return $this->protection;
    }
    public function getBlockChance():int
    {
        return $this->blockChance;
    }
}