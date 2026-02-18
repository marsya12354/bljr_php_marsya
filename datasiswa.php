<?php
// Data siswa
$data = [
    ["nis" => "2101", "nama" => "Ahmad", "kelas" => "X RPL 1", "nilai" => 85],
    ["nis" => "2102", "nama" => "Budi", "kelas" => "X RPL 1", "nilai" => 78],
    ["nis" => "2103", "nama" => "Citra", "kelas" => "X RPL 2", "nilai" => 92],
    ["nis" => "2104", "nama" => "Dina", "kelas" => "X RPL 2", "nilai" => 88],
];
?>

<h2>DATA SISWA</h2>
<table border="1" cellpadding="10">
    <tr bgcolor="#0066cc" style="color:white">
        <th>No</th>
        <th>NIS</th>
        <th>Nama</th>
        <th>Kelas</th>
        <th>Nilai</th>
        <th>Status</th>
    </tr>

    <?php
    $no = 1;
    foreach($data as $siswa) {
        // Tentukan status
        $status = ($siswa["nilai"] >= 75) ? "LULUS" : "TIDAK LULUS";
        $warna = ($siswa["nilai"] >= 75) ? "green" : "red";

        echo "<tr>";
        echo "<td>$no</td>";
        echo "<td>{$siswa['nis']}</td>";
        echo "<td>{$siswa['nama']}</td>";
        echo "<td>{$siswa['kelas']}</td>";
        echo "<td>{$siswa['nilai']}</td>";
        echo "<td style='color:$warna'><b>$status</b></td>";
        echo "</tr>";

        $no++;
    }
    ?>
</table>

<p>Total: <?php echo count($data); ?> siswa</p>s