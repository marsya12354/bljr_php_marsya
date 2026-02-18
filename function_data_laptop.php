<?php
// Function dengan 3 parameter
function laptop ($merk, $ram, $harga) {
    echo "=== DATA LAPTOP ===<br>";
    echo "Merk : $merk<br>";
    echo "Ram: $ram<br>";
    echo "Harga: $harga<br>";
    echo "<hr>";
}

// Memanggil dengan 3 parameter
laptop("asus", "251", "3.000.000");
laptop("advan", "512", "2.000.000");
?>