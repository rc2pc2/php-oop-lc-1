<?php


class Persona{
    protected $age;

    public function setAge(int $age){
        if ( !is_int($age)  ){
            throw new Exception('Il numero inserito come argomento nel metodo setAge non e\' un numero intero!');
        } else {
            $this->age = $age;
        }
    }
}

$persona = new Persona();

try {
    $persona->setAge('ciao');
} catch (Throwable $e){
    echo 'Errore nell\'assegnazione dell\'eta\' '. $e->getMessage();
}