<?php
$conn->close();
if ($conn->connect_errno) {
    $msg = 'Echec de la déconnexion : ' . $conn->connect_error;
    echo "<script>console.log(".$msg.")</script>";
    
} else {
    echo "<script>console.log('Déconnexion réussite')</script>";
}
?>