<?php
require_once ('class_persegi.php');

// Instansiasi object Lingkaran
$persegi1 = new Persegi(10, 5);
$persegi2 = new Persegi(20, 10);

//panggil method
echo "<br> Luas Persegi panjang 1: " . $persegi1->getLuas();
echo "<br> Luas Persegi panjang 2: " . $persegi2->getLuas();

echo "<br> Keliling Persegi panjang 1: " . $persegi1->getKeliling();
echo "<br> Keliling Persegi panjang 2: " . $persegi2->getKeliling();