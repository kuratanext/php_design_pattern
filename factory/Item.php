<?php
interface Item
{
	protected $name;

	public function __toString();

	public function getDetail();
}

