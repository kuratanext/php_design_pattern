abstract class Sword
{
	protected $name;
	protected $price;
	protected $material;
	protected $attack;

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
}

