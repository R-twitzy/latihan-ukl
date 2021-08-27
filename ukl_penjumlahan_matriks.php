<?php
$matriksA = [
    [3,6,9],
    [2,-1,10],
    [5,7,3],
    [9,7,8],
    [10,-4,8]
];
$matriksB = [
    [2,3,1],
    [-7,9,4],
    [3,1,5],
    [6,5,3],
    [-2,9,4]
];

//proses penjumlahan matriksA + matriksB
for ($i=0; $i < 5; $i++) {
    echo "[\t";
    for ($j=0; $j < 3; $j++) { 
        echo $matriksA[$i][$j]+$matriksB[$i][$j]."\t";
    }
    echo "\t] </br>";
}
?>