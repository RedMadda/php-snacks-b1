<!-- Snack 2
Passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione) che name sia più lungo di 3 caratteri, che mail contenga un punto e una chiocciola e che age sia un numero. Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato” -->


<?php

$output_no = "Accesso negato";
$output_ok = "Accesso riuscito";



if(empty($_GET["name"]) && (empty($_GET["mail"])) && empty($_GET["age"])){
    echo $output_no;
} else{
    $name = $_GET["name"];
    $name_len = strlen($name);

    $mail = $_GET["mail"];
    $check_mail_point = strpos($mail, ".");
    $check_mail_at = strpos($mail, "@");

    $age = $_GET["age"];

    // condizioni: nome > 3, mail ha punto, mail ha chiocciola, età è un numero
    
    if($name_len > 3 && $check_mail_point && $check_mail_at && is_numeric($age)){
        echo $output_ok;
    } else {
        echo $output_no;
    }
  

}


?>

