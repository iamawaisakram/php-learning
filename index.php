<?php

$person = [
    'age' => 26,
    'career' => 'SSE',
    'hair' => 'brownish black',
];

$person['name'] = 'Awais';

unset($person['career']);

echo '<pre>';
var_dump($person);
echo '</pre>';

die();

require 'index.view.php';
