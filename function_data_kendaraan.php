<?php
// Function dengan 3 parameter
function kendaraan ($merk, $warna, $tahun) {
    echo "=== DATA KENDARAAN ===<br>";
    echo "Merk : $merk<br>";
    echo "Warna : $warna<br>";
    echo "Tahun: $tahun<br>";
    echo "<hr>";
}

// Memanggil dengan 3 parameter
kendaraan("toyota", "putih", "2020");
kendaraan("inova", "hitam", "2019");
?>