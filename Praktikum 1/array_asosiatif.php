<?php
// membuat array asosiatif (terdiri atas key & value)
$mhs1 = [
    'nama' => 'Rafly Hadi Arianto',
    'nim' => '0110123154',
    'prodi' => 'Sistem Informasi', 
    'IPS' => [
        1 => 3.40,
        2 => 3.70,
        3 => 4.0,
    ],
];

// memanggil array asosiatif
echo "Nama : " . $mhs1['nama'];
echo "<br> IPS Semester 1 : ".$mhs1['IPS']['1'];
echo "<br> IPS Semester 2 : ".$mhs1['IPS']['2'];
echo "<br> IPS Semester 3 : ".$mhs1['IPS']['3'];