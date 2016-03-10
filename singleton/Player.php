<?php
namespace singleton;

require_once ('Singleton.php');

class Player extends Singleton
{

    private $name;

    protected function init()
    {
        $this->name = 'hikaru';
    }

    public function sayHello()
    {
        echo "Hello,{$this->name}\n";
    }
}

