create database loja;
use loja;

create table produtos(
	id int primary key auto_increment,
    nome varchar(255) not null unique,
    valor numeric(9,2) not null,
    quantidade int not null
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

alter TABLE produtos add COLUMN cat char(3) not null;

alter TABLE produtos add CONSTRAINT fk_categoria FOREIGN KEY (cat) REFERENCES categoria (cod);

alter table produtos drop FOREIGN KEY fk_categoria;

DESCRIBE produtos;

UPDATE produtos set cat = 'fru';

insert into produtos (nome, valor, quantidade) values ('Maca', '10,89', 59);
update produtos set nome='Pneu' ,valor =90.5 ,quantidade=5 where  id=1;

select * from pessoa;
select * from produtos;
select * from categoria;

