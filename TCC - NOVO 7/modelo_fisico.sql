-- Geração de Modelo físico
-- Sql ANSI 2003 - brModelo.



CREATE TABLE usuario (
cod_user int(10) PRIMARY KEY AUTO_INCREMENT,
nome varchar(50),
email varchar(200),
senha varchar(25)
);

CREATE TABLE historico (
materiais varchar(100),
cod_calc int(10) PRIMARY KEY AUTO_INCREMENT,
calculo int(100)
);

CREATE TABLE possui (
cod_user int(10),
cod_calc int(10),
FOREIGN KEY(cod_user) REFERENCES usuario (cod_user)
);

