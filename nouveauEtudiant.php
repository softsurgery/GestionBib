<!DOCTYPE html>
<html lang="en">
<?php include("connexion.php"); ?>

<?php
if (isset($_POST['submit'])){
    echo "<script>console.log('Requete En cours')</script>";
    $code = $_POST['code'];
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $adresse = $_POST['adresse'];
    $classe = $_POST['classe'];
    $requet = "insert into etudiant values ('$code','$nom','$prenom','$adresse','$classe')";
    $ok = $com->query($requet);
    if ($ok == FALSE) echo "Problème d'insertion <br/>";
    else echo "Insertion efectuée avec succes <br/>";
} else {
    echo "<script>console.log('Check Isset')</script>";
}
?>

<?php include("deconnexion.php"); ?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajouter Etudiant</title>
    <style>
        label,
        p,
        input {
            font-size: 1.3em;
        }

        body {
            height: 100%;
            padding: 0;
            margin: 0;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        h1 {
            color: #0167cc;
        }

        form {
            position: absolute;
            width: 450px;
            top: 2vh;
        }

        fieldset {
            padding: 0 20px 0 20px;
        }

        input {
            margin: 5px;
        }

        table {
            margin: 50px;
        }
    </style>
</head>

<body>

    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">

        <fieldset>
            <legend>
                <h1>Nouveau Etudiant</h1>
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
            <input type="submit" name="submit" value="Enregistrer" />
        </fieldset>
    </form>
</body>

</html>