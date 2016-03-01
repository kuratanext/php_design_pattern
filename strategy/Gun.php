<?php
namespace strategy;

require_once('WeaponInterface.php');

class Gun implements WeaponInterface
{
	public function attack()
	{
		echo "shoot!!\n";
	}
}

