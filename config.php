<?php
    // declaração das variáveis globais
    // const - uma variável para armazenar um dado constante
     const dbDrive = 'mysql'; //protocolo de acesso
     const dbHost = 'localhost'; //endereco ou link do servidor
     const dbName = 'StayGood'; //nome do Banco de dados (Database)
     const dbUser = 'root'; //login local
     const dbPass = ''; //senha


/* criação do banco de dados / tabela:

1) create database projwebservice;
2) create table alunos
(
      codigo int PRIMARY KEY AUTO_INCREMENT,
      nome varchar(50),
      email varchar(50),
      telefone varchar(25)
);

inserindo os dados:

insert into alunos (nome, email, telefone) values ('Lucio','lucio@teste.com','123456789');
insert into alunos (nome, email, telefone) values ('Nelson','Nelson@teste.com','323456788'); 
insert into alunos (nome, email, telefone) values ('Cao Ji Kan','Caojikan@teste.com','988456788');   */  
    
?>