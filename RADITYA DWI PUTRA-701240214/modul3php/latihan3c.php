<?php
function pangkat($angka, $pangkat) {
    $hasil = 1;
    for ($i = 1; $i <= $pangkat; $i++) {
        $hasil = $hasil * $angka;
    }
    return $hasil;
}

$bilangan = 5;
$pangkatnya = 3;

echo "Hasil dari " . $bilangan . " pangkat " . $pangkatnya . " = " . pangkat($bilangan, $pangkatnya);
?>