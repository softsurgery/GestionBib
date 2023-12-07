<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/style.css">
    <title>Modifier Etudiant</title>
</head>

<body>
    <div class=" notification-container">
    </div>
    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
        <fieldset>
            <legend>
                <h1>Modifier Etudiant</h1>
            </legend>
            <p>Veuillez remplir les champs suivants:</p>
            <table>
                <tr>
                    <td><label for="code">Code</label></td>
                    <td><input type="text" name="code" /></td>
                </tr>
                <tr>
                    <td><label for="nom">Nom</label></td>
                    <td><input type="text" name="nom" /></td>
                </tr>
                <tr>
                    <td><label for="prenom">Prénom</label></td>
                    <td><input type="text" name="prenom" /></td>
                </tr>
                <tr>
                    <td><label for="adresse">Adresse</label></td>
                    <td><input type="text" name="adresse" /></td>
                </tr>
                <tr>
                    <td><label for="classe">Classe</label></td>
                    <td><input type="text" name="classe" /></td>
                </tr>
            </table>
            <input type="reset" value="Annuler" />
            <input type="submit" name="submit" value="Modifier" />
        </fieldset>
    </form>
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
    $ok = $e->modifier_etudiant();
    if ($ok == FALSE)
        echo "<script>console.log('Problème d'insertion')</script>";
    else
        echo "<script>console.log('Veuillez sélectionner toutes les options.');</script>";
} else {
    echo "<script>console.log('No Action Pending')</script>";
}
?>

</html>