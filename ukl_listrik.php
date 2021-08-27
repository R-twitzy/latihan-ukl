<?php
//data pelanggan
$person = [
    ["id"=>"1", "nama"=>"Galuh", "golongan" => "1", "alamat" => "Sawojajar"],
    ["id"=>"2", "nama"=>"Indro", "golongan" => "3", "alamat" => "Kedungkandang"],
    ["id"=>"3", "nama"=>"Jedi", "golongan" => "2", "alamat" => "Ijen"],
    ["id"=>"4", "nama"=>"Kanu", "golongan" => "3", "alamat" => "Dinoyo"],
];

//masukkan
$id=3;
$pemakaian=55;

//golongan
$id -= 1;
$gol= $person[$id]["golongan"];
if ($gol == 1) {
    $tarif = 1000;
}
elseif ($gol == 2){
    $tarif = 1300;
}
elseif ($gol == 3){
    $tarif = 1500;
}
elseif ($gol == 4){
    $tarif = 1500;
}

//menghitung
$tagihan = ($pemakaian * $tarif) + 13000;

//print
echo "id \t= ".$person[$id]["id"]."</br>";
echo "nama \t= ".$person[$id]["nama"]."</br>";
echo "golongan \t= ".$person[$id]["golongan"]."</br>";
if ($tagihan<=50000) {
    echo "jumlah tagihan \t= 50000 </br>";
}
else {
    echo "jumlah tagihan \t= ".$tagihan."</br>";
}
echo "alamat \t= ".$person[$id]["alamat"]."</br>";
?>