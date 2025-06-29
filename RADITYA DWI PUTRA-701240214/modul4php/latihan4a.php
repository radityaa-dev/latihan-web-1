<?php
// Program untuk menampilkan array warna balon
// Array berisi 4 warna: hijau, kuning, kelabu, merah muda

$warna_balon = array("hijau", "kuning", "kelabu", "merah muda");

echo "Balonku ada lima.<br>";
echo "Rupa-rupa warnanya<br>";

echo '<span style="background-color: yellow;">' . ucfirst($warna_balon[0]) . '</span>, ';
echo '<span style="background-color: yellow;">' . $warna_balon[1] . '</span>, ';
echo '<span style="background-color: yellow;">' . $warna_balon[2] . '</span>, ';
echo '<span style="background-color: yellow;">' . $warna_balon[3] . '</span>, dan ';
echo '<span style="background-color: yellow;">biru</span><br>';

echo 'Meletus balon <span style="background-color: yellow;">' . $warna_balon[0] . '</span> DOR!!!<br>';
echo "Hatiku sangat kacau.<br><br>";


?>