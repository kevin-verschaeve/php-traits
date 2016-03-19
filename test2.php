<?php
/**
 * OVERRIDE D'UNE METHODE D'UN TRAIT DANS LA CLASS
 * c'est la methode de la class qui prend le dessus
 */
trait HelloWorld {
    public function sayHello() {
        echo 'Hello World!';
    }
}

class TheWorldIsNotEnough {
    use HelloWorld;
    public function sayHello() {
        echo 'Hello Universe!';
    }
}

$o = new TheWorldIsNotEnough();
$o->sayHello(); // 'Hello Universe!'