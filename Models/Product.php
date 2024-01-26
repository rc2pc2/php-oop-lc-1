<?php

/**
 * Generates a single product to be used in our ecommerce.
 */
class Product {
    public $name;
    public $description;
    public $price;
    public $category;
    public static $sellable = true;

    /**
     * Constructs a new product
     *
     * @param string $_name The product's name
     * @param string $_description A brief description of the product
     * @param float $_price The current price of the product
     * @param Category $_category The main category of this product
     */
    public function __construct(string $_name, string $_description, float $_price, Category $_category){
        $this->name = $_name;
        $this->description = $_description;
        $this->price = $_price;
        $this->category = $_category;
    }

    public function getPrice(){
        return $this->price;
    }

}
