<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            margin: 0;
            padding: 20px;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }

        .container {
            background-color: #e6e6fa;
            padding: 20px;
            border: 2px solid #333;
            border-radius: 5px;
        }

        .grid {
            display: grid;
            grid-template-columns: repeat(3, 80px);
            grid-template-rows: repeat(3, 80px);
            gap: 10px;
        }

        .box {
            border: 2px solid #333;
            background-color: #fff;
            display: flex;
            justify-content: center;
            align-items: center;
            font-size: 24px;
            font-weight: bold;
            color: #333;
        }

        .box1 { grid-column: 1; grid-row: 1; }
        .box2 { grid-column: 1; grid-row: 2; }
        .box3 { grid-column: 1; grid-row: 3; }
        .box4 { grid-column: 2; grid-row: 2; }
        .box5 { grid-column: 2; grid-row: 3; }
        .box6 { grid-column: 3; grid-row: 3; }
    </style>
</head>
<body>
    <?php
    $hurufA = "A";
    $hurufB = "B";
    $hurufC = "C";
    ?>

    <div class="container">
        <div class="grid">
            <div class="box box1"><?php echo $hurufA; ?></div>
            <div class="box box2"><?php echo $hurufA; ?></div>
            <div class="box box3"><?php echo $hurufA; ?></div>
            <div class="box box4"><?php echo $hurufB; ?></div>
            <div class="box box5"><?php echo $hurufB; ?></div>
            <div class="box box6"><?php echo $hurufC; ?></div>
        </div>
    </div>
</body>
</html>