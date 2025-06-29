<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array Negara ASEAN</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            line-height: 1.6;
        }
        .container {
            max-width: 600px;
        }
        h3 {
            color: #333;
            margin-top: 30px;
            margin-bottom: 10px;
        }
        ul {
            margin: 10px 0;
            padding-left: 30px;
        }
        li {
            margin: 5px 0;
        }
        .highlight {
            background-color: #ffeb3b;
            padding: 2px 4px;
        }
    </style>
</head>
<body>
    <div class="container">
        <?php
        $negara_asean = array("Indonesia", "Singapura", "Malaysia", "Brunei", "Thailand");
        ?>
        
        <h3>Daftar Negara ASEAN awal :</h3>
        <ul>
            <?php

            for ($i = 0; $i < count($negara_asean); $i++) {
                echo "<li>" . $negara_asean[$i] . "</li>";
            }
            ?>
        </ul>
        
        <?php
        array_push($negara_asean, "Laos", "Filipina", "Myanmar");
        ?>
        
        <h3>Daftar Negara ASEAN baru :</h3>
        <ul>
            <?php
            for ($i = 0; $i < count($negara_asean); $i++) {
                echo "<li>" . $negara_asean[$i] . "</li>";
            }
            ?>
        </ul>
        </div>
    </div>
</body>
</html>