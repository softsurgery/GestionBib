<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/style.css">
    <title>Gestion Etudiant</title>
</head>

<body>
    <div class=" notification-container">
    </div>
    <h1>Gestion Etudiant</h1>
    <table>
        <tr>
            <td><a href="nouveauEtudiant.php">Nouveau Etudiant</a></td>
        </tr>
        <tr>
            <td><a href="supprimerEtudiant.php">SupressionEtudiant</a></td>
        </tr>
        <tr>
            <td><a href="modfierEtudiant.php">Modification Etudiant</a></td>
        </tr>
        <tr>
            <td><a href="listeEtudiants.php">Liste Etudiant</a></td>
        </tr> 
        <tr>
            <td><a href="rechercheEtudiant.php">Recherche Etudiant</a></td>
        </tr>
        
    </table>
</body>

<?php
require "Etudiant.php";

if (isset($_POST['submit'])) {
    echo "<script>console.log('Requete En cours')</script>";
    $code = $_POST['code'];
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $adresse = $_POST['adresse'];
    $classe = $_POST['classe'];
    $e = new Etudiant($code, $nom, $prenom, $adresse, $classe);
    $ok = $e->ajouter_etudiant();
    if ($ok == FALSE)
        echo "<script>console.log('Problème d'insertion')</script>";
    else
        echo "<script>console.log('Veuillez sélectionner toutes les options.');</script>";
} else {
    echo "<script>console.log('No Action Pending')</script>";
}
?>

</html>