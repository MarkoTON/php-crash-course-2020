<?php

$age = 20;
$salary = 300000;

// Sample if
if ($age == 20) {
    echo "1";
}

// Without circle braces
if ($age === 20)
    echo "1";

// Sample if-else
if ($age > 20) {
    echo "1";
} else {
    echo "2";
}

// Difference between == and ===
$age == 20; // true
$age == '20'; // true
// Ovde se izgleda ista stvar desava da se vrednost konvertuje. 
$age === 20; // true
$age === '20'; // false

// if AND
if ($age > 20 && $salary === 300000) {
    echo "1".'<br>';
}
// if OR ili ||
if ($age > 20 OR $salary === 300000) {
    echo "2".'<br>';
}

// Ternary if
echo $age < 22 ? 'Young' : 'Old';
echo '<br>';

// Short ternary
$myAge = $age ?: 18; // Equivalent of "$age ? $age : 18"

// Null coalescing operator
$var = isset($name) ? $name : 'John';
$var = $name ?? 'John'; // Equivalent of above
echo $var.'<br>';

// switch
$userRole = ''; // admin, editor, user

switch ($userRole) {
    case 'admin':
        echo 'You can do anything<br>';
        break;
    case 'editor';
        echo 'You can edit content<br>';
        break;
    case 'user':
        echo 'You can view posts and comment<br>';
        break;
    default:
        echo 'Unknown role<br>';
}
