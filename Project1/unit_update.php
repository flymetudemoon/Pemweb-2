<?php
include_once('koneksi.php');

//tangkap data form
$id = $_POST['id'];
$unit = $_POST['unit'];

//buat query insert
$query = "UPDATE unit SET unit='$unit' WHERE id='$id'";

//eksekusi query
if ($dbh->query($query)) {
    header('Location: unit.php');
} else {
    echo "Gagal menyimpan data";
}