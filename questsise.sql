create schema projetoquestsise;

use projetoquestsise;

create table usuario (
codigo int auto_increment primary key,
nome varchar (100) not null,
email varchar (100) not null,
senha varchar (100) not null,
data_nascimento date);

create table status (
codigo int primary key,
nome varchar (100) not null,
descricao varchar (200));

create table tarefas (
codigo int auto_increment primary key,
nome varchar (100) not null,
categorias varchar (100) not null,
data_inicio date not null,
data_final date not null,
descricao varchar (200),
cod_status int not null,
foreign key (cod_status) references status(codigo));

create table projetos (
codigo int auto_increment primary key,
nome varchar (100) not null,
data_inicio date not null,
descricao varchar (200) not null,
data_final date null,
status varchar (100) not null,
cod_usuario int not null,
cod_status int not null,
foreign key (cod_usuario) references usuario(codigo),
foreign key (cod_status) references status(codigo));

create table formulario (
codigo int primary key,
nome varchar(100) not null,
descricao varchar(200),
cod_usuario int not null,
foreign key (cod_usuario) references usuario(codigo));


select * from usuario;
select * from status;
select * from tarefas;
select * from projetos;
select * from formulario;