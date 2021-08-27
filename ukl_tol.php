<?php
$ruas = [
    ["id"=>"1", "asal"=>"Dupak", "tujuan"=>"Waru", "Gol1"=>5000, "Gol2"=>8000, "Gol3"=>8000],
    ["id"=>"2", "asal"=>"Waru", "tujuan"=>"Sidoarjo", "Gol1"=>6000, "Gol2"=>9000, "Gol3"=>9000],
    ["id"=>"3", "asal"=>"Waru", "tujuan"=>"Porong", "Gol1"=>9000, "Gol2"=>14000, "Gol3"=>14000],
    ["id"=>"4", "asal"=>"Sidoarjo", "tujuan"=>"Waru", "Gol1"=>6000, "Gol2"=>9000, "Gol3"=>9000],
    ["id"=>"5", "asal"=>"Sidoarjo", "tujuan"=>"Porong", "Gol1"=>5500, "Gol2"=>8500, "Gol3"=>8500],
    ["id"=>"6", "asal"=>"Porong", "tujuan"=>"Sidoarjo", "Gol1"=>5500, "Gol2"=>8500, "Gol3"=>8500],
    ["id"=>"7", "asal"=>"Porong", "tujuan"=>"Waru", "Gol1"=>9000, "Gol2"=>14000, "Gol3"=>14000],
    ["id"=>"8", "asal"=>"Porong", "tujuan"=>"Kejapanan", "Gol1"=>6000, "Gol2"=>8500, "Gol3"=>8500],
    ["id"=>"9", "asal"=>"Kejapanan", "tujuan"=>"Gempol", "Gol1"=>3000, "Gol2"=>5000, "Gol3"=>5000],
];

//masukkan
$id=1;
$gol="Gol2";
$id -=1;

//print
echo "id : ".$ruas[$id]["id"]."</br>";
echo "Asal : ".$ruas[$id]["asal"]."</br>";
echo "Tujuan : ".$ruas[$id]["tujuan"]."</br>";
echo "Golongan : ".$gol."</br>";
echo "Tarif : ".$ruas[$id][$gol]."</br>";
?>