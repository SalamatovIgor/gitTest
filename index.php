<?php

use Characters\Mystic;
use Characters\WarriorWithShield;
use Enum\TypeEnum;

require __DIR__ . '/vendor/autoload.php';

$service = new WarriorWithShield(15, 14, 15, TypeEnum::HEAVY_ARMOR, 10, 10, 50);
$mag = new Mystic(5, 5, 40, 50, TypeEnum::BLUE_ROBE, TypeEnum::LORD_OF_DARKNESS, 50);

echo 'Воин со щитом' . '</br>';
echo $service->getPhysique() . '</br>';
echo $service->getAgility() . '</br>';
echo $service->getSpirit() . '</br>';
echo $service->getArmor() . '</br>';
echo $service->getRegenerationXP() . '</br>';
echo $service->getProtection() . '</br>';
echo $service->getBlockChance(). '</br>'. '</br>';
echo 'Мистик' . '</br>';
echo $mag->getPhysique() . '</br>';
echo $mag->getAgility() . '</br>';
echo $mag->getSpirit() . '</br>';
echo $mag->getRegenerationMana() . '</br>';
echo $mag->getTypeOfMantle() . '</br>';
echo $mag->getTypeOfDeity() . '</br>';
echo $mag->getLoyaltyToGod() . '</br>';
