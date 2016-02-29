<?php
class Armor implements Item
{
	protected $price;
	protected $material;
	protected $deffence;

	public function __construct($arr)
	{
		$this->name = $arr['name'];
		$this->price = $arr['price'];
		$this->material = $arr['material'];
		$this->deffence = $arr['deffence'];
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

	public function getDeffence()
	{
		return $this->deffence;
	}

	public function getDetail()
	{
		return "この鎧は{$this->getMaterial()}でできている"
			. "{$this->getPrice()}ギルで、防御力は"
			. "{$this->getDeffence()}だ！";
	}
}


