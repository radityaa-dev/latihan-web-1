<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array Multidimensi Negara ASEAN</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            line-height: 1.6;
        }
        .container {
            max-width: 800px;
        }
        h3 {
            color: #333;
            margin-top: 30px;
            margin-bottom: 20px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px 0;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
        }
        th, td {
            border: 1px solid #333;
            padding: 12px;
            text-align: left;
        }
        th {
            background-color: #f0f0f0;
            font-weight: bold;
            color: #333;
        }
        tr:nth-child(even) {
            background-color: #f9f9f9;
        }
        tr:hover {
            background-color: #f5f5f5;
        }
        .code {
            background-color: #f5f5f5;
            padding: 15px;
            border-radius: 5px;
            border: 1px solid #ddd;
            margin: 20px 0;
        }
    </style>
</head>
<body>
    <div class="container">
        <?php
        // Membuat array multidimensi dengan negara ASEAN, ibukota, dan kode telepon
        $negara_asean = array(
            array("negara" => "Indonesia", "ibukota" => "D.K.I Jakarta", "kode_telepon" => "+62"),
            array("negara" => "Singapura", "ibukota" => "Singapura", "kode_telepon" => "+65"),
            array("negara" => "Malaysia", "ibukota" => "Kuala Lumpur", "kode_telepon" => "+60"),
            array("negara" => "Brunei", "ibukota" => "Bandar Seri Begawan", "kode_telepon" => "+673"),
            array("negara" => "Thailand", "ibukota" => "Bangkok", "kode_telepon" => "+66"),
            array("negara" => "Laos", "ibukota" => "Vientiane", "kode_telepon" => "+856"),
            array("negara" => "Filipina", "ibukota" => "Manila", "kode_telepon" => "+63"),
            array("negara" => "Myanmar", "ibukota" => "Naypyidaw", "kode_telepon" => "+95")
        );
        ?>
        
        <h3>Daftar Negara ASEAN - Array Multidimensi</h3>
        
        <table>
            <thead>
                <tr>
                    <th>Negara</th>
                    <th>Ibukota</th>
                    <th>Kode Telepon</th>
                </tr>
            </thead>
            <tbody>
                <?php
                // Menggunakan foreach untuk menampilkan array multidimensi dalam tabel
                foreach ($negara_asean as $data) {
                    echo "<tr>";
                    echo "<td>" . $data["negara"] . "</td>";
                    echo "<td>" . $data["ibukota"] . "</td>";
                    echo "<td>" . $data["kode_telepon"] . "</td>";
                    echo "</tr>";
                }
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>