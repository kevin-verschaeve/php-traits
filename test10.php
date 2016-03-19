<?php
/**
 * LES TRAITS PEUVENT AVOIR DES METHODES STATIC
 */

trait StaticExample {
    public static function doSomething() {
        echo 'Doing something';
    }
}

class Example {
    use StaticExample;
}

Example::doSomething();