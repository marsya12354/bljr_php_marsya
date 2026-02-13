<?php
$nilai = 60;

echo "<h3> HASIL UJIAN</h3>";
echo "Nilai kamu: " . $nilai . "<br><br>";

if($nilai >= 75) {
    echo "<div style='color:green; font-weight:bold;'>";
    echo " SELAMAT! Anda LULUS!<br>";
    echo "Silakan ambil ijazah di TU.";
    echo "</div>";
} else {
    echo "<div style='color:red; font-weight:bold;'>";
    echo " MAAF! Anda BELUM LULUS!<br>";
    echo "Silakan mengikuti ujian perbaikan.";
    echo "</div>";
}

echo "<br><br>Semoga sukses! ";
?>