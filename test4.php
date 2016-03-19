<?php

/**
 *  AJOUT DE PROPRIETES ET METHODES A L'OBJET
 */

trait Hello {
    protected $count = 0;

    public function sayHello() {
        ++$this->count;
        echo 'Hello ';
    }
}

trait World {
    public function sayWorld() {
        ++$this->count;
        echo 'World';
    }
}

class MyHelloWorld {
    use Hello, World;
    public function sayHelloWorld() {
        ++$this->count;
        $this->sayHello();
        $this->sayWorld();
        echo '!';
        return $this->count;
    }
}

$o = new MyHelloWorld();
$count = $o->sayHelloWorld();
echo $count;