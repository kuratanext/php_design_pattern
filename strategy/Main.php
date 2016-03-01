<?php
namespace strategy;

require_once('Gun.php');
require_once('Sword.php');

require_once('WeaponClient.php');

$client = new WeaponClient();

$client->setWeapon(new Gun());
echo 'GUN ATTACK=>';
$client->attackWeapon();

$client->setWeapon(new Sword());
echo 'SWORD ATTACK=>';
$client->attackWeapon();

