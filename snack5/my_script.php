<!-- php snack 5 - 15 minuti
Prendere un paragrafo abbastanza lungo, contenente diverse frasi. Prendere il paragrafo e suddividerlo in tanti paragrafi. Ogni punto un nuovo paragrafo.
Dopo con un ciclo stampare tutti i paragrafi ottenuti. -->

<?php
    $stringa = "Lorem ipsum dolor sit. Amet consectetur adipisicing elit. Exercitationem sed consequuntur culpa consectetur. Delectus modi officiis nemo iusto. Perspiciatis quo dolor ducimus eaque explicabo. Aliquam quas deleniti sapiente neque autem!";
    $stringa_divisa = explode(".", $stringa);
    var_dump($stringa_divisa);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <ul>
        <?php foreach($stringa_divisa as $frase){ ?>
            <li><?php echo $frase ?></li>
        <?php } ?>
    </ul>
</body>
</html>