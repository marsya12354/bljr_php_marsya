<?php
$angka = 17;
$sisa = $angka % 2;  // Bagi dengan 2, ambil sisanya

echo "<h2> CEK GENAP ATAU GANJIL</h2>";
echo "<hr>";
echo "Angka yang dicek: " . $angka . "<br>";
echo "Sisa pembagian dengan 2: " . $sisa . "<br>";
echo "<br>";

//Logikanya:
//Jika sisa dibagi dengan 2 = 0, berarti genap
//Jika sisa dibagi dengan 2 = 1, berarti ganjil

if($sisa == 0)  {
    echo "<b style='color:green;'>Angka ini GENAP </b>";
}  else {
    echo "<b style='color:blue;'>Angka ini GANJIL</b>";
}

?>