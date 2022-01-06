<?php

function cetak($string)
{
    $upperCase = strtoupper($string);    
    $upperDiff = similar_text($string, $upperCase);
    
    return '"' . $string . '" mengandung ' . (strlen($string) - $upperDiff) . ' buah huruf kecil.';
}

echo cetak("TranSISI");


