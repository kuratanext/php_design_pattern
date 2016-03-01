<?php
namespace factory;

require_once('Item.php');

class Sword implements Item
{
	protected $name;
	protected $price;
	protected $material;
	protected $attack;

	public function __construct($arr)
	{
		$this->name = $arr['name'];
		$this->price = $arr['price'];
		$this->material = $arr['material'];
		$this->attack = $arr['attack'];
	}

	public function __toString()
	{
		return $this->name;
	}

	public function getPrice()
	{
		return $this->price;
	}

	public function getMaterial()
	{
		return $this->material;
	}

	public function getAttack()
	{
		return $this->attack;
	}

	public function getDetail()
	{
		return "このアイテムは{$this->getMaterial()}でできた"
			. "{$this->getPrice()}ギルの"
			. "攻撃力{$this->getAttack()}の剣だ！\n";
	}
}

