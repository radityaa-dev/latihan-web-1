<?php
$pahlawan = [
    [
        "nama" => "Soekarno",
        "asal" => "Blitar, Jawa Timur",
        "perjuangan" => "Proklamator & Presiden Pertama RI",
        "tahun_gugur" => 1970,
        "gambar" => "img/presiden_soekarno.jpg"
    ],
    [
        "nama" => "Mohammad Hatta",
        "asal" => "Bukittinggi, Sumatera Barat",
        "perjuangan" => "Proklamator & Wakil Presiden Pertama",
        "tahun_gugur" => 1980,
        "gambar" => "img/muhammad_hatta.jpg"
    ],
    [
        "nama" => "Cut Nyak Dien",
        "asal" => "Aceh",
        "perjuangan" => "Perang Aceh melawan Belanda",
        "tahun_gugur" => 1908,
        "gambar" => "img/cutnyakdien.jpg"
    ],
    [
        "nama" => "Jenderal Soedirman",
        "asal" => "Purbalingga, Jawa Tengah",
        "perjuangan" => "Panglima Besar TNI",
        "tahun_gugur" => 1950,
        "gambar" => "img/jendralsudirman.jpg"
    ],
    [
        "nama" => "R.A. Kartini",
        "asal" => "Jepara, Jawa Tengah",
        "perjuangan" => "Pejuang Emansipasi Wanita",
        "tahun_gugur" => 1904,
        "gambar" => "img/rakartini.jpg"
    ],
    [
        "nama" => "Ki Hajar Dewantara",
        "asal" => "Yogyakarta",
        "perjuangan" => "Bapak Pendidikan Nasional",
        "tahun_gugur" => 1959,
        "gambar" => "img/kihajardewantara.jpg"
    ],
    [
        "nama" => "Tuanku Imam Bonjol",
        "asal" => "Bonjol, Sumatera Barat",
        "perjuangan" => "Perang Padri",
        "tahun_gugur" => 1864,
        "gambar" => "img/tuankuimam.jpg"
    ],
    [
        "nama" => "Pangeran Diponegoro",
        "asal" => "Yogyakarta",
        "perjuangan" => "Perang Jawa melawan Belanda",
        "tahun_gugur" => 1855,
        "gambar" => "img/diponegoro.jpg"
    ],
    [
        "nama" => "Dewi Sartika",
        "asal" => "Bandung, Jawa Barat",
        "perjuangan" => "Pendidikan bagi perempuan",
        "tahun_gugur" => 1947,
        "gambar" => "img/dewisartka.jpg"
    ],
    [
        "nama" => "Sutan Sjahrir",
        "asal" => "Padang Panjang, Sumatera Barat",
        "perjuangan" => "Perdana Menteri pertama Indonesia",
        "tahun_gugur" => 1966,
        "gambar" => "img/sutansjahrir.jpg"
    ]
];
?>

<!DOCTYPE html>
<html>
<head>
    <title>Pahlawan Nasional Indonesia</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
            font-family: sans-serif;
        }
        th, td {
            border: 1px solid #999;
            padding: 8px;
            text-align: center;
        }
        img {
            max-height: 100px;
        }
    </style>
</head>
<body>
    <h2>Daftar Pahlawan Nasional Indonesia</h2>
    <table>
        <thead>
            <tr>
                <th>Nama</th>
                <th>Asal</th>
                <th>Perjuangan</th>
                <th>Tahun Gugur</th>
                <th>Gambar</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($pahlawan as $p): ?>
            <tr>
                <td><?= $p['nama'] ?></td>
                <td><?= $p['asal'] ?></td>
                <td><?= $p['perjuangan'] ?></td>
                <td><?= $p['tahun_gugur'] ?></td>
                <td><img src="<?= $p['gambar'] ?>" alt="<?= $p['nama'] ?>"></td>
            </tr>
            <?php endforeach ?>
        </tbody>
    </table>
</body>
</html>