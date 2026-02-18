<?php
// Array associative - 1 siswa
$siswa = [
    "nis" => "12345",
    "nama" => "Ahmad Wijaya",
    "kelas" => "X RPL 1",
    "nilai" => 85
];

// Mengakses dengan key 
echo $siswa["nama"];  // Budi 
echo $siswa["nilai"];  // 78

// Array 2 dimensi - banyak siswa (seperti tabel database!)
$data = [
    ["nis" => "12345", "nama" => "Ahmad", "nilai" => 85],
    ["nis" => "12346", "nama" => "Budi", "nilai" => 78],
    ["nis" => "12347", "nama" => "Citra", "nilai" => 92]
];
?>