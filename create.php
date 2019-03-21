<?php

$data = $_POST;
$data['id'] = uniqid();

var_dump($data);

file_put_contents('phonebook2.csv', (implode(',', $data) . "\n"), FILE_APPEND);

require('phonebook.php');
