<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Associative Array Negara ASEAN dan Ibukota</title>
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
        .negara {
            font-weight: bold;
            color: #2196F3;
        }
        .ibukota {
            color: #4CAF50;
        }
    </style>
</head>
<body>
    <div class="container">
        <?php
        // Membuat associative array dengan negara ASEAN dan ibukotanya
        $negara_asean = array(
            "Indonesia" => "D.K.I Jakarta",
            "Singapura" => "Singapura", 
            "Malaysia" => "Kuala Lumpur",
            "Brunei" => "Bandar Seri Begawan",
            "Thailand" => "Bangkok",
            "Laos" => "Vientiane",
            "Filipina" => "Manila",
            "Myanmar" => "Naypyidaw"
        );
        ?>
        
        <h3>Daftar Negara ASEAN dan Ibukota :</h3>
        <ul>
            <?php
            // Menggunakan foreach untuk menampilkan associative array
            foreach ($negara_asean as $negara => $ibukota) {
                echo '<li><span class="negara">' . $negara . '</span> : <span class="ibukota">' . $ibukota . '</span></li>';
            }
            ?>
        </ul>
    </div>
</body>
</html>