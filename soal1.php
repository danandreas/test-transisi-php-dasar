<?php

$nilai = array(72,65,73,78,75,74,90,81,87,65,55,69,72,78,79,91,100,40,67,77,86);

// Rata-rata
$jumlah = array_sum($nilai);
$rata = $jumlah / count ($nilai);

rsort($nilai);

// 7 Nilai Tertinggi
$tertinggi = array_slice($nilai, 0, 7 );



// Low 7
$terendah = array_slice($nilai, -7 );


// Output
echo "Nilai Rata-Rata : ". $rata . "<br>";
echo "7 Nilai Tertinggi : " . implode(', ', $tertinggi) . "<br>";
echo "7 Nilai Terendah : " . implode(', ', $terendah) . "<br>";