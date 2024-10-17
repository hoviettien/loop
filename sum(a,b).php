<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        // tổng số chẵn, lẽ vòng for
        $sumC = 0;
        $sumL = 0;
        for ($i = 0; $i < 10; $i++){
            if($i % 2 ==0){
                $sumC += $i;
            }
            else{
                $sumL += $i;
            }   
        }
        echo $sumC. "<br>";
        echo $sumL
    ?>
</body>
</html>