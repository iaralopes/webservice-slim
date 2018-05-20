CREATE DATABASE meus_filmes;
USE meus_filmes;


CREATE TABLE tbl_filmes(
id INT UNSIGNED AUTO_INCREMENT NOT NULL,
titulo VARCHAR(50) NOT NULL,
sinopse VARCHAR(500) NOT NULL,
PRIMARY KEY(id));


INSERT INTO tbl_filmes(titulo, sinopse) VALUES ('A ABELHINHA MAYA: O FILME', 'Maya é uma abelhinha muito querida, e ela e seu melhor amigo, Willy, estão a procura de diversão. Um dia, acidentalmente, ela surpreende de maneira negativa a Imperatriz de Buzztropolis, e como consequência, é forçada a participar dos Jogos de Mel e assim salvar sua colmeia.');
INSERT INTO tbl_filmes(titulo, sinopse) VALUES ('A NOITE DO JOGO', 'Max e Annie participam de um grupo de casais que organizam noites de jogos. Quando o irmão de de Max, Brooks, chega, ele decide organizar uma festa de assassinato e mistério. Quando Brooks é sequestrado, eles acreditam que tudo faz parte da misteriosa brincadeira.');
INSERT INTO tbl_filmes(titulo, sinopse) VALUES ('DEADPOOL 2', 'Sequência das aventuras do Mercenário Tagarela, interpretado por Ryan Reynolds. Na história original, o herói adquire superpoderes após uma experiência científica.');
