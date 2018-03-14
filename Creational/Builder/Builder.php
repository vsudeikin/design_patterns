<?php

use Builder\BurgerBuilder;

require_once __DIR__ . "/../../vendor/autoload.php";

$burger = (new BurgerBuilder(14))
                    ->addPepperoni()
                    ->addLettuce()
                    ->addTomato()
                    ->addCheese()
                    ->build();

var_dump($burger); 