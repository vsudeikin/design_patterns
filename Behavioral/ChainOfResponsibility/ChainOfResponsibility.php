<?php
use ChainOfResponsibility\Bank;
use ChainOfResponsibility\Bitcoin;
use ChainOfResponsibility\Paypal;
require_once __DIR__ . "/../../vendor/autoload.php";

// Сделаем такую цепочку
//      $bank->$paypal->$bitcoin
//
// Приоритет у банка
//      Если банк не может оплатить, переходим к Paypal
//      Если Paypal не может, переходим к Bitcoin

$bank = new Bank(100);          // У банка баланс 100
$paypal = new Paypal(200);      // У Paypal баланс 200
$bitcoin = new Bitcoin(300);    // У Bitcoin баланс 300

$bank->setNext($paypal);
$paypal->setNext($bitcoin);

// Начнём с банка
$bank->pay(259);

// Выходной вид
// ==============
// Нельзя оплатить с помощью банка. Обрабатываю...
// Нельзя оплатить с помощью Paypal. Обрабатываю...
// Оплачено 259 с помощью Bitcoin!