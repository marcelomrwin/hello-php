mysql -u redhat -h 127.0.0.1 -p

USE sampledb;
CREATE TABLE cidade (id INT NOT NULL, nome VARCHAR(50) NOT NULL, PRIMARY KEY (id));
INSERT INTO cidade (id,nome) VALUES(1,"Rio de Janeiro");
INSERT INTO cidade (id,nome) VALUES(2,"Brasilia");
INSERT INTO cidade (id,nome) VALUES(3,"Recife");
SELECT * FROM cidade;

#### production ####
USE sampledb;
CREATE TABLE cidade (id INT NOT NULL, nome VARCHAR(50) NOT NULL, PRIMARY KEY (id));
INSERT INTO cidade (id,nome) VALUES(1,"Fortaleza");
INSERT INTO cidade (id,nome) VALUES(2,"Curitiba");
INSERT INTO cidade (id,nome) VALUES(3,"Salvador");
SELECT * FROM cidade;
