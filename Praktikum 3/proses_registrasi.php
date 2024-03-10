<?php
$nim = $_POST["nim"];
$nama = $_POST["nama"];
$jk = $_POST["jk"];
$prodi = $_POST["prodi"];
$skills = $_POST["skills"];
$domisili = $_POST["domisili"];
$email = $_POST["email"];

$nilai_skills = [
    "HTML" => 10,
    "CSS" => 10,
    "Javascript" => 20,
    "RWD Bootstrap" => 20,
    "PHP" => 30,
    "Python" => 30,
    "Java" => 50,
];


$skors_skill = 0;
foreach ($skills as $value) {
    $skors_skill += $nilai_skills[$value];
};

if ($skors_skill == 0){
    $kat = "Tidak Memadai";
}
elseif ($skors_skill > 100){
    $kat = "Sangat Baik";
}
elseif ($skors_skill > 60){
    $kat = "Baik";
}
elseif ($skors_skill > 40){
    $kat = "Cukup";
}
elseif ($skors_skill > 0){
    $kat = "Kurang";
}
else{
    $kat = "0";
}

echo "NIM: $nim";
echo "<br>Nama Lengkap: $nama";
echo "<br>Jenis Kelamin: $jk";
echo "<br>Program Studi: $prodi";
echo "<br>Skill: " . join(", ",$skills);
echo "<br>Tempat Domisili: $domisili";
echo "<br>Skor Skill: $skors_skill";
echo "<br>Kategori Skill: $kat";
echo "<br>Email: $email";
?>