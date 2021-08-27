<?php
//data pelanggan
$person = [
    ["id"=>"1", "nama"=>"Ali"],
    ["id"=>"2", "nama"=>"Budi"],
    ["id"=>"3", "nama"=>"Dani"],
    ["id"=>"4", "nama"=>"Edi"],
    ["id"=>"5", "nama"=>"Umar"],
];

//data cottage
$cottage = [
    ["tipe"=>"Duku", "room"=>"2", "weekday"=>915000, "weekend"=>1025000, "holiday"=>1225000],
    ["tipe"=>"Jeruk", "room"=>"2", "weekday"=>915000, "weekend"=>1025000, "holiday"=>1225000],
    ["tipe"=>"Alpukat", "room"=>"1", "weekday"=>575000, "weekend"=>695000, "holiday"=>895000],
    ["tipe"=>"Jambu Air", "room"=>"1", "weekday"=>575000, "weekend"=>695000, "holiday"=>895000],
    ["tipe"=>"Durian", "room"=>"2", "weekday"=>595000, "weekend"=>715000, "holiday"=>915000],
    ["tipe"=>"Melon", "room"=>"2", "weekday"=>595000, "weekend"=>715000, "holiday"=>915000],
    ["tipe"=>"Belimbing", "room"=>"2", "weekday"=>495000, "weekend"=>575000, "holiday"=>755000],
    ["tipe"=>"Mangga", "room"=>"2", "weekday"=>495000, "weekend"=>575000, "holiday"=>755000],
    ["tipe"=>"Kedondong", "room"=>"2", "weekday"=>495000, "weekend"=>575000, "holiday"=>755000],
    ["tipe"=>"Barrack", "room"=>"Per Person", "weekday"=>25000, "weekend"=>25000, "holiday"=>35000],
];

//masukkan
$id=3;
$c=7;
$biaya=0;
$jumlahhari=3;
$golhari="weekday";

//hitung
$id -= 1;
$c -= 1;
if($golhari == "weekend") {
    $biaya += $jumlahhari * $cottage[$c]["weekend"];
}
elseif($golhari == "weekday") {
    $biaya += $jumlahhari * $cottage[$c]["weekday"];
}
elseif($golhari == "holiday") {
    $biaya += $jumlahhari * $cottage[$c]["holiday"];
}

echo "id: " . $person[$id]["id"]."</br>";
echo "nama: " . $person[$id]["nama"]."</br>";
echo "jumlah hari: " . $jumlahhari."</br>";
echo "golongan hari: " . $golhari."</br>";
echo "tipe cottage: " . $cottage[$c]["tipe"]."</br>";
echo "biaya: Rp " . $biaya."</br>";

?>