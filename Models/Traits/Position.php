<?php

trait Position{
    public $hallway;
    public $shelf;

    public function getPosition(){
        return $this->hallway . ' ' . $this->shelf;
    }
}