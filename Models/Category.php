<?php

/**
 * Category is used to categorize our ecommerce products.
 *
 * @author Gino <gino@email.com>
 * @link http://url.com
 * @license MIT
 * @since 1.0.2
 */
class Category{
    public $name;
    public $description;
    public $imageUrl;

    /**
     * Constructs a new instance of type Category, given a name, a description and an optional image string url.
     *
     * @param string $_name Category's name
     * @param string $_description Category's description
     * @param string|null $_imageUrl Category's image url, optional.
     */
    public function __construct(string $_name, string $_description, string $_imageUrl = null){
        $this->name = $_name;
        $this->description = $_description;
        $this->imageUrl = $_imageUrl;
    }
}