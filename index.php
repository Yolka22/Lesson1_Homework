<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<!-- style for task 3-->
    <style>
        .circle{
            position: absolute;
            top: 200px;
            left: 200px;
            border: 1px solid red;
            border-radius: 50%;
        }
    </style>

<!-- task 1-->
    <?php
     for ($i = 0; $i <= 10; $i++) {
        $result = $i * 2;
        $fontSize = $i * 10;
        echo "<span style= \"font-size:{$fontSize}px; color:green;\">{$result},</span>";
    }
    ?>

<!-- task 3-->
    <?php
    $Size = 20;
     for ($i = 0; $i <= 10; $i++) {
        $Size += 15;
        echo "<div class=\"circle\" style=\"width:{$Size}px; height:{$Size}px \"></div>";
    }
    ?>

</body>
</html>