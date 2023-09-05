create database loja;

use loja;

create table produtos(
	id int primary key auto_increment,
    nome varchar(100),
    valor float,
    quantidade int
);

create table pessoa(
	id int primary key auto_increment,
    nome varchar(255) not null,
    idade int,
    sexo varchar(20)
);

CREATE TABLE categoria(
	cod CHAR(3) PRIMARY key not null,
    categoria VARCHAR(15) not null
);

insert into categoria(cod, categoria) 
values 
('fru', 'fruta'),
('ver', 'verdura'),
('nop', 'Nao perecivel'),
('aut', 'automotivo');

select * from produtos;
insert into produtos (nome, valor, quantidade) values ('Pneu', '125.99', '50');
update produtos set nome='Pneu' ,valor =90.5 ,quantidade=5 where  id=1;
