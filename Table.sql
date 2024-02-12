create database tea;
use tea;

create table categPers(
    idCateg int primary key,
    nomCateg VARCHAR(1000)
);

create table personnes(
    idPers int primary key auto_increment,
    nomPers VARCHAR(1000),
    idCateg int,
    foreign key idCateg references categPers(idCateg)
);

create table variete(
    
)