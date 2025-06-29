<?php

define('BATAS_AKHIR', 20);

echo "<h2>Program Deteksi Bilangan Ganjil, Genap, dan Prima</h2>";
echo "<p>Mengecek bilangan dari 1 sampai " . BATAS_AKHIR . "</p>";
echo "<hr>";


function isPrima($angka) {
    if ($angka <= 1) {
        return false;
    }
    
    if ($angka == 2) {
        return true;
    }
    
    if ($angka % 2 == 0) {
        return false;
    }
    
    for ($i = 3; $i * $i <= $angka; $i += 2) {
        if ($angka % $i == 0) {
            return false;
        }
    }
    
    return true;
}

for ($bilangan = 1; $bilangan <= BATAS_AKHIR; $bilangan++) {
    
    echo "<strong>Bilangan $bilangan:</strong> ";
    
    if ($bilangan % 2 == 0) {
        $jenisGanjilGenap = "Genap";
    } else {
        $jenisGanjilGenap = "Ganjil";
    }
    

    if (isPrima($bilangan)) {
        $jenisPrima = "Prima";
    } else {
        $jenisPrima = "Bukan Prima";
    }
    
    echo "$jenisGanjilGenap, $jenisPrima";
    
    if (isPrima($bilangan)) {
        echo " <span style='color: red; font-weight: bold;'>⭐</span>";
    }
    
    echo "</br>";
}

echo "<hr>";
echo "<h3>Statistik:</h3>";


$countGanjil = 0;
$countGenap = 0;
$countPrima = 0;
$i = 1;

while ($i <= BATAS_AKHIR) {
    if ($i % 2 == 0) {
        $countGenap++;
    } else {
        $countGanjil++;
    }
    
    if (isPrima($i)) {
        $countPrima++;
    }
    
    $i++;
}

echo "Total bilangan ganjil: $countGanjil</br>";
echo "Total bilangan genap: $countGenap</br>";
echo "Total bilangan prima: $countPrima</br>";

?>