create database fodase;

use fodase;

create table pessoa(
codigo int not null primary key auto_increment,
nome varchar (150) not null,
telefone varchar (15) not null
)Engine = InnoDB;

select * from pessoa;


