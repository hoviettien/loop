<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    // tạo 50 ô vuông
        for ($i = 0 ; $i < 5; $i++){
             echo "<div>";
        for ($j = 0 ; $j < 10; $j++){
                echo "<div class = 'square'> </div>";
             }
             echo "</div>";
     }
     ?>
</body>
</html>