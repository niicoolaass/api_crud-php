<?php
 //declaração das variáveis globais
 const dbDrive = 'mysql'; //protocolo de acesso
 const dbHost = 'localhost'; //endereço ou link do servidor
 const dbName = 'projwebservices'; //nome do seu Banco de dados (database)
 const dbUser = 'root'; //login local
 const dbPass =''; //senha

 /* 
Create database projwebservices;

create table alunos
(
   codigo int PRIMARY KEY AUTO_INCREMENT,
   nome varchar(50),
   email varchar(50),
   telefone varchar(25)
)
------------------------------------------------------------------------------------------
insert into alunos (nome,email,telefone) values ('Lucio Luzetti','lucio@eniac.edu.br','11987690973');
insert into alunos (nome,email,telefone) values ('Nelson Luzetti','nelson@eniac.edu.br','11990000567');
insert into alunos (nome,email,telefone) values ('Cao Ji Kan','cao@eniac.edu.br','11987666699'); 
*/
?>