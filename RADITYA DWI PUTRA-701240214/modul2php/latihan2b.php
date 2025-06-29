<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modul 2 Latihan 1</title>
</head>
<style>
    .kotak {
        width: 40px;
        height: 40px;
        border: 2px solid black;
        display: inline-block;
        text-align: center;
        line-height: 40px;
        font-size: 18px;
        font-weight: bold;
        margin: 2px;
        background-color: white;
    }
    .clear {
        clear: both;
        display: block;
    }
    .row {
        margin-bottom: 5px;
    }
</style>
<body>
<div class="clear">
<?php 
$tinggi = 5; 

for ($i = 1; $i <= $tinggi; $i++) {
    echo '<div class="row">';
    for ($j = 1; $j <= $i; $j++) {
        echo '<div class="kotak">' . $j . '</div>';
    }
    echo '</div>';
}
?>
</div>
</body>
</html>