<?php

/*
//Problem 02

Write a PHP function to concatenate two strings, but with the second string starting from the end of the first string.
*/


// solved this problem using reverse function

function concatRev ($value1){        
    $value2 = strrev($value1);
    $value1;
    return $value1 . " " . $value2;    
}
// print_r(concatRev('Bangladesh'));
print_r(concatRev('Bangladesh')."\n");


// simple solution

function concatStr ($value1, $value2){
    return $value1.$value2;
}
print_r(concatStr('hello', 'bangladesh'."\n"));

// capitalization and adding a space using ucfirst funciton.

function concatStr2($value1, $value2){
    $capVal1 = ucfirst($value1);
    $capVal2 = ucfirst($value2);
    return $capVal1." ".$capVal2;    
}
concatStr3('hello', 'bangladesh');

// see the output
print_r(concatStr2('hello', 'bangladesh'. "\n"));


// capitalization and adding space using ucword function.

function concatStr3($value1, $value2){
    $result = $value1." ".$value2;
    return ucwords($result);
}
concatStr3('hello', 'bangladesh');

// see the output
print_r(concatStr3('hello', 'bangladesh')); 

