-- Active: 1733434204073@@127.0.0.1@3306
CREATE DATABASE Gestion_Cinéma;
 use Gestion_Cinéma;

 CREATE Table admins(
    id int primary key AUTO_INCREMENT,
    fullName VARCHAR(50),
    city VARCHAR(50),
    age int ,
    tele VARCHAR(50),
    pasword VARCHAR(50)
    
 );

 CREATE Table films(
     id int primary key AUTO_INCREMENT,
    titre VARCHAR(50),
    genre VARCHAR(50),
    duree VARCHAR(50),
    dateSortie date,
    realisateur VARCHAR(50),
    distribution VARCHAR(50)
 );

update Films
set titre=''
