create database if not exists base;
use base;
create table if not exists 'universites'(
    'id' INT PRIMARY KEY NOT NULL,
    'nom' VARCHAR(100),
    'domaine' VARCHAR(200),
    'image' VARCHAR(200))
);
REPLACE INTO 'universites'
SET id = 4,
nom = 'universite  Rabat',
domaine = 'Mathematiques Appliquees',
image = 'uir.PNG';