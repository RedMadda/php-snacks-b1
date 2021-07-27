<!-- Snack 1
Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario. Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite.  -->

<?php
$girone1 = [

    [
        'casa' => "Spagna",
        'ospite' => "Giappone",
        'pti_casa' => 72,
        'pti_ospite' => 85
    ],

    [
        'casa' => "Italia",
        'ospite' => "Francia",
        'pti_casa' => 115,
        'pti_ospite' => 110
    ],

    [
        'casa' => "Slovenia",
        'ospite' => "Argentina",
        'pti_casa' => 118,
        'pti_ospite' => 112
    ],

    [
        'casa' => "Australia",
        'ospite' => "Nigeria",
        'pti_casa' => 85,
        'pti_ospite' => 67
    ]  
    
];

$gir1_len = count($girone1);
var_dump($gir1_len);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Basket</title>
</head>
<body>
    <!-- Stampiamo a schermo tutte le partite con questo schema: Olimpia Milano - Cantù | 55-60 -->

<?php for($i = 0; $i <= $gir1_len; $i++){?>
    <p>
        <span>
            <?php echo $girone1[$i]["casa"]?>
        </span>
        -
        <span>
            <?php echo $girone1[$i]["ospite"]?>
        </span>
        |
        <span>
            <?php echo $girone1[$i]["pti_casa"]?>-<?php echo $girone1[$i]["pti_ospite"]?>
        </span>
    </p>
<?php } ?>





</body>
</html>