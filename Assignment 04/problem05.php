<?php
/*
// Problem 05

5.Write a PHP function to find the second largest number in an array of numbers.

*/

function secondHighestNumber (array $value){
    sort($value);
    return $value[sizeof($value) - 2];
}
print_r(secondHighestNumber(array(10,20,30,40,50,55)));

