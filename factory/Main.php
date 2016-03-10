<?php
namespace factory;

require_once ('ItemFactory.php');

$bronzeSword = [
    'name' => '銅の剣',
    'price' => 200,
    'material' => '銅',
    'attack' => 15
];
$silverSword = [
    'name' => '銀の剣',
    'price' => 5000,
    'material' => '銀',
    'attack' => 40
];

$leatherArmor = [
    'name' => 'レザーアーマー',
    'price' => 100,
    'material' => '革',
    'deffence' => 10
];
$goldArmor = [
    'name' => '金の鎧',
    'price' => 10000,
    'material' => '金',
    'deffence' => 30
];

$itemFactory = new ItemFactory();
$items[] = $itemFactory->create('sword', $bronzeSword);
$items[] = $itemFactory->create('sword', $silverSword);
$items[] = $itemFactory->create('armor', $leatherArmor);
$items[] = $itemFactory->create('armor', $goldArmor);

foreach ($items as $item) {
    echo $item->getDetail();
}

