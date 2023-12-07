<?php
function connexion(){
    $com = new mysqli("localhost", "root", "", "GestionBib");
    if ($com->error == null) {
        echo "<script>console.log('Base correcte')</script>";
        return $com;
    } else echo "<script>console.log('Base incorrect')</script>";
    return null;
}

?>