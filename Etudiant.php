<?php
require "connexion.php";

class Etudiant
{
    private $codeetudiant;
    private $nom;
    private $prenom;
    private $adresse;
    private $classe;
    private $conn;

    public function __construct($codeetudiant, $nom, $prenom, $adresse, $classe)
    {
        $this->codeetudiant = $codeetudiant;
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->adresse = $adresse;
        $this->classe = $classe;
        $this->conn = connexion();
    }

    public function setCodeetudiant($codeetudiant)
    {
        $this->codeetudiant = $codeetudiant;
    }

    public function setNom($nom)
    {
        $this->nom = $nom;
    }

    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;
    }

    public function setAdresse($adresse)
    {
        $this->codeetudiant = $adresse;
    }

    public function SetClasse($classe)
    {
        $this->classe = $classe;
    }

    function getCodeEtudiant()
    {
        return $this->codeetudiant;
    }

    function getNom()
    {
        return $this->nom;
    }

    function getPrenom()
    {
        return $this->prenom;
    }

    function getAdresse()
    {
        return $this->adresse;
    }

    function getClasse()
    {
        return $this->classe;
    }

    public function liste_etudiants()
    {
        try {
            $liste = $this->conn->query("SELECT CodeEtudiant, nom, prenom, adresse, classe FROM etudiant");
            return $liste;
        } catch (Exception $e) {
            die('Error:' . $e->getMessage());
        }
    }

    public function ajouter_etudiant()
    {
        $req = "INSERT INTO etudiant(CodeEtudiant,nom,prenom,adresse,classe) values('"
            . $this->codeetudiant ."','"
            . $this->nom . "','"
            . $this->prenom . "','"
            . $this->adresse . "','"
            . $this->classe . "')";

        $sql = $this->conn->query($req);
        return ($sql) ? true : false;
    }

    public function supprimer_etudiant()
    {
        $sql = $this->conn->query("DELETE FROM etudiant WHERE codeetudiant = " .$this->codeetudiant);
        return $sql ? true : false;
    }

    function modifier_etudiant()
    {
        $req = "UPDATE etudiant 
        SET nom = '" . $this->nom . "', 
        prenom = '" . $this->prenom . "', 
        adresse = '" . $this->adresse . "', 
        classe = '" . $this->classe . "' 
        WHERE codeetudiant = '" . $this->codeetudiant . "'";

        $sql = $this->conn->query($req);
        return $sql ? true : false;
    }

    function recherche_etudiant()
    {
        $req = "SELECT CodeEtudiant, nom, prenom, adresse, classe FROM etudiant WHERE codeetudiant = ". $this->codeetudiant;
        $result = mysqli_query($this->conn, $req);
        if ($result && mysqli_num_rows($result) > 0)
            return mysqli_fetch_assoc($result);
        else
            return null;
    }
}

?>