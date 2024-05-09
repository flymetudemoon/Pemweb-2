<?php
include_once('koneksi.php');

//tangkap data form
$unit = $_POST['unit'];

//buat query insert
$query = "INSERT INTO unit (unit) VALUES ('$unit')";

//eksekusi query
if ($dbh->query($query)) {
    header('Location: unit.php');
} else {
    echo "Gagal menyimpan data";
}