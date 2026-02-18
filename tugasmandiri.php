<?php
$roda = 4;

echo "<h3> SISTEM IDENTIFIKASI JENIS KENDARAAN</h3>";
echo "<hr>";
echo "roda: " . $roda. "<br><br>";

echo "<c>Hasil:</b><br>";

if($roda >= 2) {
    $sepedamotor = "A";
    $predikat = "Sangat Baik";
    $warna = "blue";
} elseif($roda >= 3) {
     $becak= "B";
    $predikat = "Baik";
    $warna = "green";
} elseif($roda >= 4) {
     $mobil = "C";
    $predikat = "Cukup";
    $warna = "orange";
} else {
     $truck_bus= "E";
    $predikat = "Sangat Kurang";
    $warna = "darkred";
}

echo "<div style= 'background:#f0f0f0; padding:10px; border-radius:5px;'>";
echo "<span style='font-size:24px; color:" . $warna . "; font-weight:bold;'>";
echo "roda: " . $roda;
echo "</span><br>";
echo "predikat: " . $predikat;
echo "</div>";

?>