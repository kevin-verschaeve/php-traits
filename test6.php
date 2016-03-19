<?php

/**
 * CHANGER LA VISIBILITÉ D'UNE METHODE GRACE AUX ALIAS
 */

trait HelloWorld {
    public function sayHello() {
        echo 'Hello World!';
    }
}

// Modification de la visibilité de la méthode sayHello
class MyClass1 {
    use HelloWorld { sayHello as protected; }
}

// Utilisation d'un alias lors de la modification de la visibilité
// La visibilité de la méthode sayHello n'est pas modifiée
class MyClass2 {
    use HelloWorld { sayHello as private myPrivateHello; }
}