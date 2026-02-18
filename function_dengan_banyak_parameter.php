<?php
// Function dengan 3 parameter
function biodata ($nama, $umur, $kelas) {
    echo "=== BIODATA SISWA ===<br>";
    echo "Nama : $nama<br>";
    echo "Umur : $umur tahun<br>";
    echo "Kelas: $kelas<br>";
    echo "<hr>";
}

// Memanggil dengan 3 parameter
biodata("Ahmad Wijaya", 17, "X RPL 1");
biodata("Siti Nurhaliza", 16, "X RPL 2");
biodata("Budi Santoso", 17, "X RPL 1");
?>