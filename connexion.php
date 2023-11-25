<?php
$com = new mysqli("localhost", "root", "", "GestionBib");
if ($com->error == null)
    echo "<script>console.log('Base correcte')</script>";
else
    echo "<script>console.log('Base incorrect')</script>";
?>