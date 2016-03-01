<?php
namespace singleton;

require_once('Player.php');

$player = Player::getInstance();
$player->sayHello();

$player2 = Player::getInstance();
$player2->sayHello();

var_dump($player === $player2);

