<?php
namespace strategy;

require_once ('WeaponInterface.php');

class WeaponClient
{

    private $weapon;

    public function setWeapon(WeaponInterface $weaponType)
    {
        $this->weapon = $weaponType;
    }

    public function attackWeapon()
    {
        return $this->weapon->attack();
    }
}
