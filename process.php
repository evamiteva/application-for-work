<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $ime = $_POST["ime"];
    $prezime = $_POST["prezime"];
    $pozicija = $_POST["pozicija"];
    $iskustvo = $_POST["iskustvo"];
    $currentDateTime = date("Y-m-d H:i:s");

    // Овде можеш да направиш што и да е со податоците, како што е испис на екран или нивно зачувување во база на податоци.

    // Пример: Испис на податоците
    echo "<p><b>Направивте успешна апликација</p></b>";

    echo $currentDateTime;
    
    echo "<p>$ime $prezime успешно аплицираше на работното место $pozicija-$iskustvo</p>";
}
?>
