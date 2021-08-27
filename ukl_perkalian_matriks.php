<?php
/**
 * matriksA -> 2*4
 * matriksB -> 4*1
 * hasil -> 2*1
 */
$barisA=2;
$kolomA=4;
$barisB=2;
$kolomB=1;

$matriksA=[
    [3,6,1,8],
    [4,1,1,7]
];
$matriksB=[
    [2],
    [5],
    [7],
    [4]
];


/* proses perkalian*/
//batas loop pertama adlh jml baris matriksA
for ($i=0; $i < $barisA ; $i++) { 
    //batas loop kedua adlh jml kolom matriksB
    for ($j=0; $j < $kolomB; $j++) { 
        $result=0;
        //batas loop ketiga adlh jml kolom matriksA
        for ($k=0; $k < $kolomA; $k++) { 
            $result += $matriksA[$i][$k] * $matriksB[$k][$j];
        }
        echo $result." ";
    }
    echo "</br>";
}

?>