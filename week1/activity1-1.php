<?php

$name = 'Zachary Lincoln';
$age = 25;
$person = [$name, $age, 'name' => $name, 'age' => $age];

echo "My name is $name and age is $age.<br>";
echo 'My name is ' . $name . ' and age is ' . $age . '.<br>';
echo 'My name is ' . $person[0] . ' and age is ' . $person[1] . '.<br>';
echo 'My name is ' . $person['name'] . ' and age is ' . $person['age'] . '.<br>';

$age = null;
echo $age; //no output

unset($name);
echo $name; //no output

?>