-- --------------------------------------------------------

CREATE TABLE `etudiant` (
  `CodeEtudiant` INT PRIMARY KEY AUTO_INCREMENT,
  `Nom` varchar(255) NOT NULL,
  `Prenom` varchar(255) NOT NULL,
  `Adresse` varchar(255) NOT NULL,
  `Classe` varchar(100) NOT NULL
);

-- --------------------------------------------------------

CREATE TABLE `livre` (
  `CodeLivre` INT PRIMARY KEY AUTO_INCREMENT,
  `Titre` varchar(255) NOT NULL,
  `Auteur` varchar(255) NOT NULL,
  `DateEdition` date NOT NULL
);

-- --------------------------------------------------------

CREATE TABLE `emprunte` (
  `CodeEtudiant` INT NOT NULL,
  `CodeLivre` INT NOT NULL,
  `DateEmprunt` date NOT NULL,
  CONSTRAINT `emprunte_etudiant` FOREIGN KEY (`CodeEtudiant`) REFERENCES `etudiant` (`CodeEtudiant`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `emprunte_livre` FOREIGN KEY (`CodeLivre`) REFERENCES `livre` (`CodeLivre`) ON DELETE CASCADE ON UPDATE CASCADE,
  PRIMARY KEY (`CodeEtudiant`, `CodeLivre`, `DateEmprunt`)
);
