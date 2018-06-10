create database tianarasonBD;

create table images (
    id SERIAL PRIMARY KEY,
    nom varchar(100) NOT NULL,
    legende varchar(500),
    categorie varchar(20),
    image OID
);
