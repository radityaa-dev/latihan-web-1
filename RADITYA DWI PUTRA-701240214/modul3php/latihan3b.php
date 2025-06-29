<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>modul 3 latihan 2</title>
</head>
<body>
    <p>definisi, isset() akan mengembalikan nilai true jika kita telah mendefinisikan variabel sebelumnya dan menetapkan nilainya ke sesuatu selain NULL. Ini dapat mencakup 0, string kosong, atau false. Di sisi lain, empty() akan mengembalikan nilai true setiap kali nilai variabel disetel ke sesuatu yang bernilai false—kami menyebutnya nilai “false”.  <br>
Contoh nilai false termasuk 0, string kosong “” dan string “0”, array kosong, NULL, atau tentu saja boolean false.
Satu kesamaan antara isset() dan empty() adalah keduanya merupakan konstruksi bahasa dan oleh karena itu tidak dapat dipanggil menggunakan fungsi variabel.</p>
<h3>contoh hasil perbedaan di antara keduanya sebagai berikut</h3>
<?php
 
 $fruit = '';
  
 if(isset($fruit)) {
     echo 'Do you like about you by the 1975 '.$fruit.'?';
 }
 // Output:  Do you like ?
  
 if(!empty($fruit)) {
     echo 'Do you like about you by the 1975 '.$fruit.'?';
 }
 // No Output
  
 ?>
</body>
</html>