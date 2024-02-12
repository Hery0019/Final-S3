create database tea;
use tea;

insert into histoCueillettes(date_cueillettes, choix_cueilleur, choix_parcelle, poids) values
    ('2023-06-10', 1, 1, 15.0),
    ('2023-06-12', 2, 2, 12.5);

-- Sample data for histoDepense table
insert into histoDepense(date_depense, choix_depense, montant) values
    ('2023-06-15', 1, 150.0),
    ('2023-06-20', 2, 120.0);

-- Sample data for resultat table
insert into resultat(poids_total_cueillette, poids_restant_parcelles, cout_revient) values
    (27.5, 20.5, 270.0);


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
    foreign key (idCateg) references categPers(idCateg)
);
insert into personnes(nomPers, genre, date_naissance, idCateg) values
    ('John Doe', 'M', '1990-05-15', 1),
    ('Jane Doe', 'F', '1985-12-28', 2),
    ('Alice Smith', 'F', '1995-08-20', 2);

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
    ('Green Tea', 1.8, 3.0),
    ('Black Tea', 1.8, 5.0);

create table parcelles(
    idParcelle int primary key auto_increment,
    surface decimal(10,2),
    variete int,
    foreign key (variete) references variete(idVariete)
);
insert into parcelles(surface, variete) values
    (1.20, 1),
    (1.20, 2);

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
    date_cueillettes date,
    choix_cueilleur int,
    choix_parcelle int,
    poids decimal(10,2),
    foreign key (choix_cueilleur) references variete(idVariete),
    foreign key (choix_parcelle) references parcelles(idParcelle)
);

create table histoDepense(
    idhisto int primary key auto_increment,
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