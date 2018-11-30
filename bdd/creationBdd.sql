#create database tianarasonBD;

create table image (
     id SERIAL PRIMARY KEY,
     nom varchar(50) not null,
     legende varchar(200),
     categorie varchar(20),
     photo VARCHAR(200)
);

create table CompteAdmin (
    id SERIAL PRIMARY KEY,
    pseudo varchar(30) UNIQUE,
    MDP varchar(20),
    role varchar(5),
    CONSTRAINT admin_user CHECK (role='admin')
);

# communication
insert into Image(nom,legende,categorie,photo)
    values('captage apercu net1', 'captage', 'communication', 'image/communication/captage_APERCU_net_1.jpg');

insert into Image(nom,legende,categorie,photo)
    values('carte couleur', 'carte couleur', 'communication', 'image/communication/carte_couleur_reduit.jpg');

insert into Image(nom,legende,categorie,photo)
    values('carte mada 1', 'carte mada', 'communication', 'image/communication/cartemada1.jpg');

insert into Image(nom,legende,categorie,photo)
    values('carte mada 2', 'carte mada', 'communication', 'image/communication/cartemada2.jpg');

insert into Image(nom,legende,categorie,photo)
    values('carte mada 3', 'carte mada', 'communication', 'image/communication/cartemada3.jpg');

insert into Image(nom,legende,categorie,photo)
    values('carte mada 4', 'carte mada', 'communication', 'image/communication/cartemada4.jpg');

# passion
insert into Image(nom,legende,categorie,photo)
    values('photoA1', 'A1', 'passion', 'image/passion/A1.jpg');

insert into Image(nom,legende,categorie,photo)
    values('photoA2', 'A2', 'passion', 'image/passion/A2.jpg');

insert into Image(nom,legende,categorie,photo)
    values('photoA3', 'A3', 'passion', 'image/passion/A3.jpg');

insert into Image(nom,legende,categorie,photo)
    values('photoA4', 'A4', 'passion', 'image/passion/A4.jpg');

insert into Image(nom,legende,categorie,photo)
    values('photoA5', 'A5', 'passion', 'image/passion/A5.jpg');

insert into Image(nom,legende,categorie,photo)
    values('photoA6', 'A6', 'passion', 'image/passion/A6.jpg');

# personnalisation
insert into Image(nom,legende,categorie,photo)
    values('bad girl', 'Affiche bad Alès', 'personnalisation', 'image/personnalisation/bad_girl.jpg');

insert into Image(nom,legende,categorie,photo)
    values('tournoi ours', 'Affiche tournoi ours', 'personnalisation', 'image/personnalisation/tournoi_ours.jpg');

insert into Image(nom,legende,categorie,photo)
    values('tournoi SGSC', 'Affiche tournoi SGSC', 'personnalisation', 'image/personnalisation/tournoi_SGSC.jpg');

# portfolio
insert into Image(nom,legende,categorie,photo)
    values('cimetiere_sans_pesticide', 'Affiche cimetière sans pesticide',
      'portfolio', 'image/cimetiere_sans_pesticide.jpg');

insert into Image(nom,legende,categorie,photo)
    values('chien', 'Un petit chien',
      'portfolio', 'image/chien.jpg');

#compteAdmin

insert into compteAdmin (pseudo,MDP,role)
    values ('tianarason','doudoutiti','admin')
