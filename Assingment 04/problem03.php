<?php
/*
// Problem 03

3.Write a PHP function to remove the first and last element from an array and return the remaining elements as a new array.

*/

// $array = ['apple','mango','banana','orange','berry'];

function removeElement($array){
    array_shift($array);
    array_pop($array);
    return $array;
}

$array = ['apple','mango','banana','orange','berry','samsung']; 

removeElement($array);

print_r(removeElement($array));


