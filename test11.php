<?php
/**
 * LES TRAITS PEUVENT DEFINIR DES PROPRIETES (testé dans test4.php)
 */

trait PropertiesTrait {
    public $x = 1;
}

class PropertiesExample {
    use PropertiesTrait;

    // la classe ne peut pas definir un attribut qu'un deja trait a defini
    // si c'est quand meme le cas
    // et que la valeur de l'attribut est egal (public $x = 1;), alors une erreur de type E_STRICT sera levee
    // si la valeur est differente (public $x = 2), alors une erreur fatale est levee
}

$example = new PropertiesExample;
echo $example->x;