CREATE DATABASE db_escola;
USE db_escola;
CREATE TABLE alunos(
  id int NOT NULL auto_increment,
  nome   VARCHAR(200)  NOT NULL,
  serie VARCHAR (3),
  telefone       VARCHAR (11),
  endereco  VARCHAR (200) NOT NULL,
  email VARCHAR (60),
  nascimento    DATE,
  PRIMARY KEY (id));


CREATE TABLE usuarios(
  id    INT           NOT NULL  AUTO_INCREMENT,
  cpf VARCHAR(11)  NOT NULL,
  senha VARCHAR(200)  NOT NULL,
  PRIMARY KEY (id));