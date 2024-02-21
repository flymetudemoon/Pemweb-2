<?php
// membuat array
$mhs1 = ['0110123154','Rafly Hadi Arianto','Sistem Informasi',[3.5, 3.7, 4.0]];

// memanggil array
echo 'Nama: ' . $mhs1[1] . '<br>';                   // konkatenasi string
echo "NIM: $mhs1[0] <br>";                           // string interpolation
echo "IPS Semester 1: " . $mhs1[3][0];