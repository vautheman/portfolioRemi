-- Création des data de la base de données portfolioRemi le 26 septembre 2019
-- par AUTHEMAN Victor

-- mysql

-- Suppression des données

DELETE FROM portfolioItems;
DELETE FROM portfolio;

-- Création des données

INSERT INTO portfolio VALUES
(1, "Linux"),
(2, "Cisco"),
(3, "PHP");

INSERT INTO portfolioItems VALUES
(1, 1, "Installation debian 9", "Tutoriel pour installer et configurer debian 9", "php.jpg"),
(2, 1, "Configuration de debian9", "Lorem ipsum dolor sit amet, consectetur adipisicing elit.", "linux.jpg"),
(3, 1, "Installer Apache2", "Lorem ipsum dolor sit amet, consectetur adipisicing elit.", "html.jpg"),
(4, 2, "Configuration CISCO", "Lorem ipsum dolor sit amet, consectetur adipisicing elit.", "cisco.jpg"),
(5, 2, "Configuration CISCO", "Lorem ipsum dolor sit amet, consectetur adipisicing elit.", "cisco.jpg"),
(6, 3, "Fichier de Configuration PHP", "Lorem ipsum dolor sit amet, consectetur adipisicing elit.","php.jpg"),
(7, 3, "Fichier de Configuration PHP", "Lorem ipsum dolor sit amet, consectetur adipisicing elit.","php.jpg");
