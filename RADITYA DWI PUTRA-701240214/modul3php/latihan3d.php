<?php
function faktorial($a) {
    $hasil = 1;
    for ($i = 1; $i <= $a; $i++) {
        $hasil = $hasil * $i;
    }
    return $hasil;
}

echo "Faktorial dari 5 = " . faktorial(5);
?>