<?php

/*
This is only a SKELETON file for the "Hamming" exercise. It's been provided as a
convenience to get you started writing code faster.

Remove this comment before submitting your exercise.
*/

function distance(string $strandA, string $strandB) : int
{
    $hamming = 0;
    for($i = 0; $i < strlen($stranA); $i++){
        if($strandA[$i] != $strandB[$i]){
            $hamming++;
        }
    }
    return $hamming;
}
