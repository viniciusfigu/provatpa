CREATE DATABASE receita;
USE receita;



CREATE TABLE autor (
   id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
   nome VARCHAR(50),
   email VARCHAR(20),
   titulodareceita VARCHAR(15),
   receita VARCHAR(2000)
   ) ;
   
