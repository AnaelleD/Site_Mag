#create database tianarasonBD;

create table image (
     id SERIAL PRIMARY KEY,
     nom varchar(50) not null,
     legende varchar(200),
     categorie varchar(20),
     photo VARCHAR(200)
);

insert into Image(nom,legende,categorie,photo)
  values('bad girl', 'Affiche bad Alès', 'publicite', '../image/bad_girl.jpg');

insert into Image(nom,legende,categorie,photo)
    values('cimetiere_sans_pesticide', 'Affiche cimetière sans pesticide',
      'creativite', '../image/cimetiere_sans_pesticide.jpg');

insert into Image(nom,legende,categorie,photo)
    values('chien', 'Un petit chien',
      'creativite', '../image/chien.jpg');
