<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des Étudiants</title>
    <link rel="stylesheet" href="./assets/css/style.css">
</head>
<body>
    <h2>Liste des Étudiants</h2>

    <?php
        require "Etudiant.php";
        $etudiant = new Etudiant(null, null, null, null, null);
        $liste = $etudiant->liste_etudiants();
        if ($liste->num_rows > 0) {
            echo "<table>";
            echo "<tr>
                    <th>Code Étudiant</th>
                    <th>Nom</th>
                    <th>Prénom</th>
                    <th>Adresse</th>
                    <th>Classe</th>
                  </tr>";

            while ($row = $liste->fetch_assoc()) {
                echo "<tr>
                        <td>{$row['CodeEtudiant']}</td>
                        <td>{$row['nom']}</td>
                        <td>{$row['prenom']}</td>
                        <td>{$row['adresse']}</td>
                        <td>{$row['classe']}</td>
                      </tr>";
            }
            echo "</table>";
        } else {
            echo "Aucun étudiant trouvé.";
        }
    ?>

</body>
</html>
