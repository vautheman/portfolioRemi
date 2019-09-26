-- Création de la base de données portfolioRemi le 26 septembre 2019
-- par AUTHEMAN Victor

-- mysql

-- Suppression des tables

DROP TABLE if exists portfolioItems;
DROP TABLE if exists portfolio;

-- Création des tables

CREATE TABLE portfolio(
  portId int primary key auto_increment,
  portLib varchar(50)
) engine=innodb charset=utf8;

CREATE TABLE portfolioItems(
  itemId int auto_increment,
  portId int,
  itemLib varchar(50),
  itemDesc text,
  itemImg varchar(20),
  primary key(itemId, portId)
)engine=innodb charset=utf8;

ALTER TABLE portfolioItems add foreign key (portId) references portfolio(portId);
