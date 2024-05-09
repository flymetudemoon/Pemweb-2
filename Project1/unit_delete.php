<?php
include_once('koneksi.php');

//tangkap data url
$id = $_GET['id'];

//buat query insert
$query = "DELETE FROM unit WHERE id='$id'";

//eksekusi query
if ($dbh->query($query)) {
    header('Location: unit.php');
} else {
    echo "Gagal menghapus data";
}