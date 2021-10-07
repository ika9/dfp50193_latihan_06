<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Baju</title>
</head>
<body>
    <h1>Harga Baju</h1>
    <?php
    $H=0;
    $B=17;
    for ($y=50; $y>$B; $y -= $B) {
        $H++;
        
    }
    echo "$H helai baju dan baki duit = $y";
    ?>
</body>
</html>