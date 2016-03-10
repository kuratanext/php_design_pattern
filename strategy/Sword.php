<?php
namespace strategy;

require_once ('WeaponInterface.php');

class Sword implements WeaponInterface
{

    public function attack()
    {
        echo "slash!!\n";
    }
}

