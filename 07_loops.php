<?php

// while
// while (true) { // Infinite loop: DON'T run this
//     // Do something constantly
//     echo "Infinite loop";
//     return;
// };

// Loop with $counter
$counter = 0; // When counter is 10??
while ($counter < 10) {
    echo $counter.'<br>';
    $counter++;
    if ($counter == 10) echo '<hr>';
}

// do - while
$counter = 0; // When counter is 10?
do {
    // Do some code right here
    $counter++;
} while ($counter < 10);

// for
for ($i = 0; $i < 10; $i++) {
    echo $i."<br>";
}

// foreach
$fruits = ["Banana", "Apple", "Orange"];

foreach ($fruits as $fruit){
    echo 'simple one - '. $fruit . '<br>';
}

foreach ($fruits as $i => $fruit) {
    echo $i . ' ' . $fruit . '<br>';
}

// Iterate Over associative array.
$person = [
    'name' => 'Brad',
    'surname' => 'Traversy',
    'age' => 30,
    'hobbies' => ['Tennis', 'Video Games'],
];

// Stampanje array-a
foreach ($person as $key => $value) {
    if (is_array($value)) {
        echo $key .' '. implode(',',$value).'<br>';
    } else {
        echo  $key . ' ' . $value . '<br>';
    }
}

echo '<hr>';

foreach ($person as $key => $value) {
    if ($key === 'hobbies') {
        break;
    }
    echo $key . ' ' . $value . '<br>';
}
