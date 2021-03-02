<?php

$age = 20;
$salary = 300000;

// Sample if
if ($age === 20) {
  echo 'The age is 20';
};

// Without circle braces
if ($age === 20)
  echo 'The age is 20';

// Sample if-else
if ($age > 20) {
  echo 'the age is 20';
} else {
  echo 'the age is not 20' . '<br>';
}
// Difference between == and ===
if ($age == 20) {
  echo "1" . '<br>'; //true
}
if ($age == '20') {
  echo "2" . '<br>'; //true
}
if ($age === 20) {
  echo "1" . '<br>'; //true
}
if ($age === '20') {
  echo "1" . '<br>'; //false
}


// if AND
if ($age == 20 && $salary === 300000) {
  echo 'Do something' . '<br>';
}
// if OR
if ($age > 20 || $salary === 300000) {
  echo 'Do something' . '<br>';
}
// Ternary if
echo $age < 22 ? 'Young' : 'Old';
// Short ternary
$myage = $age ?: 19;
echo '<pre>';
var_dump($myage);
echo '</pre>';

// Null coalescing operator
$myname = isset($name) ? $name : 'John';
$myname = $name ?? 'John';
echo '<pre>';
var_dump($myname);
echo '</pre>';
// switch

$userrole = 'admin'; //editor,user,admin
switch ($userrole) {
  case 'admin':
    echo 'admin';
    break;
  case 'editor':
    echo 'editor';
    break;
  case 'user':
    echo 'user';
    break;
  default:
    echo 'invalid role';
}
