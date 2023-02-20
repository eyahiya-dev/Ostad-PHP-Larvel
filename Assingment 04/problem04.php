<?php
/*
// Problem 04

4.Write a PHP function to check if a string contains only letters and whitespace.

*/

function checkSpaceLetter ($value){
    $replace_white_space = str_replace(" ", "",$value);
    if(ctype_alpha($replace_white_space)){
        return "Your typed sentence contain Letter.";
    }else{
        return "No letter available.";
    }
}
print_r(checkSpaceLetter("I love my country"));


