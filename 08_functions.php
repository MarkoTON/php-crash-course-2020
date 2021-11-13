<?php

// Function which prints "Hello I am Zura"
function hello()
{
    echo 'Hello I am Zura<br>';
}

hello();
hello();
hello();

// Function with argument
//function hello($name)
//{
//    echo "Hello I am $name";
//}

// Create sum of two functions
function sum($a, $b)
{
    return $a + $b . '<br>';
}

echo sum(4,5);
echo sum(9,10);

// Create function to sum all numbers using ...$nums
// Ovde pretvara sve vrednosti u array i onda loop da ih sabere. 
function sum_loop(...$nums)
{
   $sum = 0;
   foreach ($nums as $num) $sum += $num;
   return $sum;
}
echo sum_loop(1, 2, 3, 4, 6);

echo '<br>';
//
// Arrow functions
function sum_reduce(...$nums)
{
   return array_reduce($nums, fn($carry, $n) => $carry + $n);
};
echo sum_reduce(1, 2, 3, 4, 6);


