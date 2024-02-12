create database tea;
use tea;

create table categPers(
    idCateg int primary key,
    nomCateg VARCHAR(100)
);
insert into categPers(idCateg, nomCateg) values
    (1,'administrateur'),
    (2,'cueilleur');

create table personnes(
    idPers int primary key auto_increment,
    nomPers VARCHAR(100),
    genre CHAR,
    date_naissance date,
    idCateg int,
    mdp VARCHAR(100),
    foreign key (idCateg) references categPers(idCateg)
);
insert into personnes(nomPers, genre, date_naissance, idCateg, mdp) values
    ('Rebeca RKT', 'F', '2006-06-07', 2, 'rebeca'),
    ('John Doe', 'M', '1990-05-15', 2, 'john'),
    ('Jane Doe', 'F', '1985-12-28', 2, 'jane'),
    ('Alice Smith', 'F', '1995-08-20', 2, 'alice');

create table salaire(
    montant_kg decimal(10,2)
);
insert into salaire(montant_kg) values
    (500000.00);

create table variete(
    idVariete int primary key auto_increment,
    nomVariete VARCHAR(100),
    occupation decimal(10,2),
    rendement decimal(10,2)
);
insert into variete(nomVariete, occupation, rendement) values
    ('Green Tea', 1, 5.0),
    ('Black Tea', 1, 5.0);

create table parcelles(
    idParcelle int primary key auto_increment,
    surface decimal(10,2),
    variete int,
    foreign key (variete) references variete(idVariete)
);
insert into parcelles(surface, variete) values
    (20, 8),
    (20, 7);

create table depense(
    idDepense int primary key auto_increment,
    nomDepense VARCHAR(100)
);
insert into depense(nomDepense) values
    ('Carburant'),
    ('Engrais'),
    ('logistique');

create table histoCueillettes( 
    idhisto int primary key auto_increment,
    idPers int,
    date_cueillettes date,
    choix_cueilleur int,    
    choix_parcelle int,
    poids decimal(10,2),
    foreign key (choix_cueilleur) references variete(idVariete),
    foreign key (choix_parcelle) references parcelles(idParcelle),
    foreign key (idPers) references personnes(idPers)
);
insert into histoCueillettes(idPers, date_cueillettes, choix_cueilleur, choix_parcelle, poids) values
    (4, '2023-04-04', 6, 11, 10),
    (4, '2023-04-14', 6, 11, 20),
    (4, '2023-04-24', 6, 11, 10),
    (4, '2023-04-29', 6, 11, 30),
    (4, '2023-04-30', 6, 12, 10),
    (4, '2023-04-23', 6, 12, 30);

create table histoDepense(
    idhisto int primary key auto_increment,
    idPersonne int,
    date_depense date,
    choix_depense int,
    montant decimal(10,2),
    foreign key (choix_depense) references depense(idDepense)
);

create table resultat(
    idresultat int primary key auto_increment,
    poids_total_cueillette decimal(10,2),
    poids_restant_parcelles decimal(10,2),
    cout_revient decimal(10,2)
);