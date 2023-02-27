<?php
/*
1.Write a PHP function to sort an array of strings by their length, in ascending order. (Hint: You can use the usort() function to define a custom sorting function.)
*/
// Problem 01
function sortByLength ($value1, $value2){
    if($value1 == $value2){
        return 0;
    }
    if(strlen($value1) > strlen($value2)){
        return 1;
    }else{
        return -1;
    }
}

$value1 = ['a','cat','apple','pineapple', 'ksgsoihgosigsioejfgiowejiowhio'];

usort($value1, 'sortBylength');

foreach($value1 as $key => $value){
    echo "$key: $value \n" ;
}
