<?php

use State\DefaultText;
use State\LowerCase;
use State\TextEditor;
use State\UpperCase;

require_once __DIR__ . "/../../vendor/autoload.php";

$editor = new TextEditor(new DefaultText());

$editor->type('First line') . PHP_EOL;

$editor->setState(new UpperCase());

$editor->type('Second line') . PHP_EOL;
$editor->type('Third line');

$editor->setState(new LowerCase());

$editor->type('Fourth line');
$editor->type('Fifth line');

// Output:
// First line
// SECOND LINE
// THIRD LINE
// fourth line
// fifth line