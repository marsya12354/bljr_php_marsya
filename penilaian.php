<?php
$nilai = 85;

echo "<h3> SISTEM PENILAIAN</h3>";
echo "<hr>";
echo "Nama Ahmat Santoso<br>";
echo "Nilai: " . $nilai . "<br><br>";

echo "<b>Hasil:</b><br>";

if($nilai >= 90) {
    $grade = "A";
    $predikat = "Sangat Baik";
    $warna = "blue";
} elseif($nilai >= 80) {
     $grade = "B";
    $predikat = "Baik";
    $warna = "green";
} elseif($nilai >= 70) {
     $grade = "C";
    $predikat = "Cukup";
    $warna = "orange";
} elseif($nilai >= 60) {
     $grade = "D";
    $predikat = "Kurang";
    $warna = "red";
} else {
     $grade = "E";
    $predikat = "Sangat Kurang";
    $warna = "darkred";
}

echo "<div style= 'background:#f0f0f0; padding:10px; border-radius:5px;'>";
echo "<span style='font-size:24px; color:" . $warna . "; font-weight:bold;'>";
echo "Grade: " . $grade;
echo "</span><br>";
echo "Predikat: " . $predikat;
echo "</div>";
?>