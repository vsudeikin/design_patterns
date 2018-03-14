<?php

use Memento\Editor;
require_once __DIR__ . "/../../vendor/autoload.php";

$editor = new Editor();

// Пишем что-нибудь
$editor->type('This is the first sentence.');
$editor->type('This is second.');

// Сохранение состояния в: This is the first sentence. This is second.
$saved = $editor->save();

// Пишем ещё
$editor->type('And this is third.');

// Output: Содержимое до сохранения
echo $editor->getContent() . PHP_EOL; // This is the first sentence. This is second. And this is third.

// Восстанавливаем последнее сохранённое состояние
$editor->restore($saved);

echo $editor->getContent() . PHP_EOL; // This is the first sentence. This is second.