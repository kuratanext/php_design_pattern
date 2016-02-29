<?php
class ItemFactory
{
	public function create($type, $arr)
	{
		switch($type){
			case 'sword':
				return new Sword($arr);
			case 'armor':
				return new Armor($arr);
		}
	}
}

