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
    fullName VARCHAR(50),
    city VARCHAR(50),
    age int ,
    tele VARCHAR(50),
    pasword VARCHAR(50)
 )