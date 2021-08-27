<?php
$kolom=10;

/** matriks A */
echo "</br>"."Matriks A"."</br>";
for ($i=0; $i < $kolom; $i++) { 
    for ($j=0; $j <= $i ; $j++) { 
        echo "* \t";
    }
    echo "</br>";
}

/** matriks B */
echo "</br>"."Matriks B"."</br>";
for ($i=0; $i <= $kolom; $i++) { 
    for ($j=$kolom; $j>$i ; $j--) { 
        echo "* \t";
    }
    echo "</br>";
}

/** matriks C */
echo "</br>"."Matriks C"."</br>";
//bagian atas
$kolommin = $kolom-1;
for ($i=0; $i < $kolommin; $i++) { 
    for ($j=0; $j <= $i ; $j++) { 
        echo "* \t";
    }
    echo "</br>";
}
//bagian bawah
for ($i=0; $i <= $kolom -1; $i++) { 
    for ($j=$kolom; $j>$i ; $j--) { 
        echo "* \t";
    }
    echo "</br>";
}

/** matriks D */
echo "</br>"."Matriks D"."</br>";
//bagian atas
for ($i=0; $i <= $kolom -1; $i++) { 
    for ($j=$kolom; $j>$i ; $j--) { 
        echo "* \t";
    }
    echo "</br>";
}
//bagian bawah
for ($i=1; $i < $kolom; $i++) { 
    for ($j=0; $j <= $i ; $j++) { 
        echo "* \t";
    }
    echo "</br>";
}
?>