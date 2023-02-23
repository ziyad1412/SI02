<?php

//Buat Array
$animals = ["Kucing", "Nyamuk", "Singa", "Ayam"];
echo $animals[3] . "<br>";
echo $animals[1] . "<br>";

foreach ($animals as $animal) {
    echo $animal . "<br>";
}

// Buat array asosiatif
$mahasiswa = ["nama"=>"Ziyad", "jurusan"=>"TI", "semester"=>6];
echo $mahasiswa["jurusan"] . "<br>";

foreach ($mahasiswa as $key=>$value) {
    echo "Key nya adalah " . $key . " Value: " . $value . "<br>";

}

// Buat array multidimensi
$dosen = [
    ["Pak Rojul", "Web"],
    ["Pak Nasrul", "DDP"],
    ["Pak Lukman", "OS"]
];
// 00 01 10 11 20 21
echo $dosen[0][0];

?>