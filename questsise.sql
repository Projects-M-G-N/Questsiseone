create schema projetoquestsise;

use projetoquestsise;

create table usuario (
codigo int auto_increment primary key,
nome varchar(100) not null,
email varchar(100) not null,
senha varchar(100) not null,
data_nascimento date);

create table categorias (
codigo int primary key,
nome varchar(100) not null,
descricao varchar(200));

create table tarefas (
codigo int auto_increment primary key,
nome varchar(100) not null,
data_inicio date not null,
data_final date not null,
descricao varchar(200),
cod_categoria int not null,
foreign key (cod_categoria) references categorias(codigo));

create table projetos (
codigo int auto_increment primary key,
nome varchar(100) not null,
descricao varchar(100) not null,
data_inicio date not null,
data_final date null,
status varchar(100) not null,
cod_usuario int not null,
cod_cat int not null,
foreign key (cod_usuario) references usuario(codigo),
foreign key (cod_cat) references categorias(codigo));

create table formulario (
codigo int primary key,
nome varchar(100) not null,
descricao varchar(200),
cod_usuario int not null,
foreign key (cod_usuario) references usuario(codigo));


select * from usuario;
select * from categorias;
select * from tarefas;
select * from projetos;
select * from formulario;







