create database loja;

use loja;

create table produtos(
	id int primary key auto_increment,
    nome varchar(100),
    valor float,
    quantidade int
);

select * from produtos;
insert into produtos (nome, valor, quantidade) values ('Pneu', '125.99', '50');
update produtos set nome='Pneu' ,valor =90.5 ,quantidade=5 where  id=1;
