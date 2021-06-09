<?php

require 'functions.php';

$person = [
    'age' => 26,
    'career' => 'SSE',
    'hair' => 'brownish black',
    'single' => false,
];

$person['name'] = 'Awais';

dd($person);

unset($person['career']);

echo '<pre>';
var_dump($person);
echo '</pre>';

// die();

require 'index.view.php';
