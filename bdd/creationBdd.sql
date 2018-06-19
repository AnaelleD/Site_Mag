#create database tianarasonBD;

create table Image (
    id SERIAL PRIMARY KEY,
    nom varchar(100) NOT NULL,
    legende varchar(500),
    categorie varchar(20),
    image OID
);

/* temp Anaelle
insert into Image(nom,legende,categorie,image)
  values('bad girl', 'Affiche bad Alès', 'publicite', lo_import('C:\wamp64\www\Site_Mag\image\bad_girl.jpg'));

insert into Image(nom,legende,categorie,image)
    values('cimetiere_sans_pesticide', 'Affiche cimetière sans pesticide',
      'publicite', lo_import('C:\wamp64\www\Site_Mag\image\cimetiere_sans_pesticide.jpg'));
*/

/* temp Diane */
insert into Image(nom,legende,categorie,image)
  values('bad girl', 'Affiche bad Alès', 'publicite', lo_import('/var/www/html/Site_Mag/image/bad_girl.jpg'));

insert into Image(nom,legende,categorie,image)
    values('cimetiere_sans_pesticide', 'Affiche cimetière sans pesticide',
      'creativite', lo_import('/var/www/html/Site_Mag/image/cimetiere_sans_pesticide.jpg'));
