<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/style.css">
    <title>Supprimer Etudiant</title>
</head>

<body>
    <div class=" notification-container">
    </div>
    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
        <fieldset>
            <legend>
                <h1>Supprimer Etudiant</h1>
            </legend>
            <p>Veuillez remplir les champs suivants:</p>
            <table>
                <tr>
                    <td><label for="code">Code</label></td>
                    <td><input type="text" name="code" /></td>
                </tr>
            </table>
            <input type="reset" value="Annuler" />
            <input type="submit" name="submit" value="Supprimer" />
        </fieldset>
    </form>
</body>

<?php
require "Etudiant.php";

if (isset($_POST['submit'])) {
    echo "<script>console.log('Requete En cours')</script>";
    $code = $_POST['code'];
    $e = new Etudiant($code, null, null, null, null);
    $ok = $e->supprimer_etudiant();
    if ($ok == FALSE)
        echo "<script>console.log('Problème de suppression')</script>";
    else
        echo "<script>console.log('Veuillez sélectionner toutes les options.');</script>";
} else {
    echo "<script>console.log('No Action Pending')</script>";
}
?>

</html>