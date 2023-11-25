
-- --------------------------------------------------------

CREATE TABLE `etudiant` (
  `CodeEtudiant` NUMBER PRIMARY KEY AUTO_INCREMENT,
  `Nom` varchar(255) NOT NULL,
  `Prenom` varchar(255) NOT NULL,
  `Adresse` varchar(255) NOT NULL,
  `Classe` varchar(100) NOT NULL
)

-- --------------------------------------------------------

CREATE TABLE `livre` (
  `CodeLivre` NUMBER PRIMARY KEY AUTO_INCREMENT,
  `Titre` varchar(255) NOT NULL,
  `Auteur` varchar(255) NOT NULL,
  `DateEdition` date NOT NULL
)

-- --------------------------------------------------------

CREATE TABLE `emprunte` (
  `CodeEtudiant` NUMBER NOT NULL,
  `CodeLivre` NUMBER NOT NULL,
  `DateEmprunt` date NOT NULL
   CONSTRAINT `emprunte_etudiant` FOREIGN KEY (`CodeEtudiant`) REFERENCES `etudiant` (`CodeEtudiant`) ON DELETE CASCADE ON UPDATE CASCADE,
   CONSTRAINT `emprunte_livre` FOREIGN KEY (`CodeLivre`) REFERENCES `livre` (`CodeLivre`) ON DELETE CASCADE ON UPDATE CASCADE;
   PRIMARY KEY (`CodeEtudian`t, `CodeLivre`, `DateEmprunt`),
)
