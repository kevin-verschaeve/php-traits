<?php
/**
 * AJOUT DE METHODES ABSTRACT FORCANT LES CLASSES FILLES A LES DECLARER
 */

trait Hello {
    public function sayHelloWorld() {
        echo 'Hello '.$this->getWorld();
    }
    abstract public function getWorld();
}

class MyHelloWorld {
    private $world;
    use Hello;
    public function getWorld() {
        return $this->world;
    }
    public function setWorld($world) {
        $this->world = $world;
    }
}

$o = new MyHelloWorld();
$o->setWorld('World!');
$o->sayHelloWorld();