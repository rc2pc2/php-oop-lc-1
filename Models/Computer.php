<?php
require_once __DIR__ . '/Product.php';

class Computer extends Product{
    public $ram;
    public $cpu;
    public $gpu;

    public function __construct(string $_name, string $_description, float $_price, Category $_category, $_ram, $_cpu, $_gpu, $_hallway, $_shelf)
    {
        parent::__construct($_name, $_description, $_price, $_category, $_hallway, $_shelf);
        // ? che equivale a
        // $this->name = $_name;
        // $this->description = $_description;
        // $this->price = $_price;
        // $this->category = $_category;

        $this->ram = $_ram;
        $this->cpu = $_cpu;
        $this->gpu = $_gpu;

    }
}



?>