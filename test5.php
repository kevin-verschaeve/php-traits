<?php
/**
 * CONFLICTS DE METHODE DANS DES TRAITS DIFFFERENTS MAIS UTILISÉ DANS LA MÊME CLASSE
 */

trait A {
    public function smallTalk() {
        echo 'a';
    }
    public function bigTalk() {
        echo 'A';
    }
}

trait B {
    public function smallTalk() {
        echo 'b';
    }
    public function bigTalk() {
        echo 'B';
    }
}

class Talker {
    use A, B {
        B::smallTalk insteadof A; // dit qu'on utilise la methode smallTalk du trait B, plutot que celle du trait A
        A::bigTalk insteadof B; // dit qu'on utilise la methode bigTalk du trait A, plutot que celle du trait B
    }
}

class Aliased_Talker {
    use A, B {
        B::smallTalk insteadof A;
        A::bigTalk insteadof B;
        B::bigTalk as talk; // ici, on veut quand meme le bigTalk de B, on lui met un alias pour eviter le conflit
    }
}

$talker = new Talker;
$talker->bigTalk();

echo PHP_EOL;

$aliased = new Aliased_Talker;
$aliased->talk();
