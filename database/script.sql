create database pequeninos;
use pequeninos;

create table atendimentos(
id_atendimento int(11) not null auto_increment,
nome varchar(255),
nome_aluno varchar(255),
cpf_aluno varchar(15),
email varchar(255),
telefone varchar(15),
celular varchar(16),
assunto varchar(255),
mensagem text,
situacao int(2),
dt_criacao datetime,
dt_alteracao datetime,
primary key (id_atendimento)
);

create table albuns(
id_album int(11) not null auto_increment,
nome varchar(255),
situacao int(2),
primary key (id_album)
);

create table imagens_albuns(
id_imagem int(11) not null auto_increment,
caminho text,
album_id int(11),
primary key (id_imagem),
foreign key (album_id) references albuns(id_album)
);

create table noticias(
id_noticia int(11) not null auto_increment,
titulo varchar(255),
capa text,
noticia longtext,
dt_criacao datetime,
situacao int(2),
primary key (id_noticia)
);

create table usuarios(
id_usuario int(11) not null auto_increment,
nome varchar(255),
email varchar(255),
senha varchar(255),
codigo_senha varchar(50),
tipo_usuario int(2),
avatar text,
situacao int(2),
primary key (id_usuario)
);

create table eventos(
id_evento int(11) not null auto_increment,
nome varchar(255),
data datetime,
local varchar(255),
cor varchar(255),
situacao int(2),
primary key (id_evento)
);

create table colaboradores(
id_colaborador int(11) not null auto_increment,
nome varchar(255),
funcao varchar(255),
desde varchar(5),
situacao int(2),
primary key (id_colaborador)
);

create table prestacoes_de_contas(
id_prestacao int(11) not null auto_increment,
titulo varchar(255),
data date,
prestacao longtext,
situacao int(2),
primary key (id_prestacao)
);

create table parametros_inicio(
id_parametro int(11) not null auto_increment,
tipo varchar(255),
numero int(11),
primary key (id_parametro)
);