<?php
// Menghitung Luas Bangun Datar

// Data persegi panjang
$panjang = 10;
$lebar = 5;

// Rumus
$luas = $panjang * $lebar;
$keliling = 2 * ($panjang + $lebar);

// Tampilan
echo "<h2> MENGHITUNG PERSEGI PANJANG</h2>";
echo "<hr>";
echo "<b>Data:</b><br>";
echo "Panjang = " . $panjang . " cm<br>";
echo "Lebar = " . $lebar . " cm<br>";
echo "<br>";
echo "<b>Hasil Perhitungan:</b><br>";
echo "Luas = " . $luas . " cm2<br>";
echo "Keliling = " . $keliling . " cm<br>";
echo "<br>";
echo "<i>Rumus Luas: panjang x lebar</i><br>";
echo "<i>Rumus Keliling: 2 x (panjang + lebar)</i>";

?>