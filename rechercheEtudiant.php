<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/style.css">
    <title>Recherche Etudiant</title>
</head>

<body>
    <div class="notification-container"></div>
    <form action="resultatRecherche.php" method="get">
        <fieldset>
            <legend>
                <h1>RechercherEtudiant</h1>
            </legend>
            <p>Veuillez remplir les champs suivants:</p>
            <table>
                <tr>
                    <td><label for="code">Code</label></td>
                    <td>
                        <?php
                        require "Etudiant.php";
                        $etudiant = new Etudiant(null, null, null, null, null);
                        $liste = $etudiant->liste_etudiants();

                        echo "<select name='code'>";
                        while ($row = $liste->fetch_assoc()) {
                            echo "<option value='{$row['CodeEtudiant']}'>{$row['CodeEtudiant']}</option>";
                        }
                        echo "</select>";
                        ?>
                    </td>
                </tr>
            </table>
            <input type="submit" name="submit" value="Rechercher" />
        </fieldset>
    </form>
</body>

</html>
