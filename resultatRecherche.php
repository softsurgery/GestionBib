<?php
require_once "Etudiant.php";

if(isset($_GET["code"])) {
    $code = $_GET["code"];
    $e = new Etudiant($code, null, null, null, null);
    $student = $e->recherche_etudiant();
    
    if ($student) {
        echo "Student found! Details:<br>";
        echo "ID: " .  $code . "<br>";
        echo "Name: " . $student['nom'] . "<br>";
        echo "Surname: " . $student['prenom'] . "<br>";
        echo "Address: " . $student['adresse'] . "<br>";
        echo "Class: " . $student['classe'] . "<br>";
    } else {
        echo "Student not found!";
    }
} else {
    echo "No code provided!";
}
?>
