<?php
/**
 * FONCTIONNEMENT D'UN TRAIT PHP
 */
class Base {
    public function sayHello() {
        echo 'Hello ';
    }
}

trait SayWorld {
    public function sayHello() {
        parent::sayHello();
        echo 'World!';
    }

    public function sayHelloNoParent() {
    	echo 'World!';
    }
}

class MyHelloWorld extends Base {
    use SayWorld;
}

class VaPlanter {
	use SayWorld;
}

$o = new MyHelloWorld();
$o->sayHello();

$v = new VaPlanter();
$v->sayHelloNoParent();
// $v->sayHello(); // plante car la VaPlanter n'a pas de parent