php snack 4 - 15 minuti
<!-- Creare un array con 15 numeri casuali, tenendo conto che l’array non dovrà contenere lo stesso numero più di una volta -->

<!-- no, rifare con cicli -->

<?php
    $random_nums = range(0, 100);
    shuffle($random_nums );
    $random_nums = array_slice($random_nums,0,100);

    var_dump($random_nums);
   
?>