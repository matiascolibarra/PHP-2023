create database centro;
use centro;

create table personas(
    id int primary key auto_increment,
    rol varchar (100),
    nombre varchar(100),
    apellido varchar(100),
    telefono varchar(100),
    direccion varchar(100),
    dni varchar(100));


insert into personas (rol,nombre,apellido,telefono,direccion,dni) values
("Alumno","Silvestre","Cruz","223-5756231","San Juan 2500","41081735"),
("Alumno","Juan","Andrade","223-5698123","Alberti 856","42546218"),
("Alumno","Adrian","Esteban","223-5623489","Rawson 1248","41568523"),
("Alumno","Gonzalo","Montes","223-5486215","Garay 1356","42513568"),
("Alumno","Mariano","Garcia","223-5462685","Colon 2602","40548761"),
("Profesor","Jorge","Rosel","223-5489623","Falucho 3561","30256471"),
("Profesor","Luna","Castells","223-5468512","Gascon 623","29546125"),
("Profesor","Salome","Checa","223-5452159","Castelli 425","28694153"),
("Profesor","Dani","Nogues","223-5412648","Lavalle 822","35489562"),
("Profesor","Marcos","Palomino","223-5421685","Urquiza 1245","25645879");

create table usuario(
    id int primary key auto_increment,
    n_usuario varchar(100),
    email varchar (100),
    clave varchar(100),
    id_persona varchar(100),
    ft_perfil varchar(100));

insert into usuario(n_usuario,email,clave,id_persona,ft_perfil) values
("Jorgelin123","jorgitomdp@gmail.com","2562","6",null),
("Lunita04","LunaCastells@gmail.com","5657","7",null),
("Salomon_el_grande","Salome100@gmail.com","2235","8",null),
("Danyprox100","Danipro@gmail.com","4416","9",null),
("MarcosP","MarcosP@yahoo.com","6843","10",null);

create table alumnos(
    id int primary key auto_increment,
    id_persona varchar (100));

insert into alumnos (id_persona) values
("1"),
("2"),
("3"),
("4"),
("5");


create table instructores(
    id int primary key auto_increment,
    id_persona varchar (100),
    id_curso varchar (100),
    area varchar (100));

insert into instructores(id_persona,id_curso,area) values
("1","1","Programacion"),
("2","2","Base de datos"),
("3","3","Python"),
("4","4","Matematica"),
("5","5","Logica");

create table cursos(
    id int primary key auto_increment,
    nombre varchar (100),
    duracion varchar(100),
    cupo varchar (100),
    imagen varchar (100));

insert into cursos(nombre,duracion,cupo,imagen) values
("Programacion","7 Meses","30",null),
("Base de datos","4 Meses","25",null),
("Python","5 Meses","20",null),
("Matematica","1 Año","35",null),
("Logica","8 Meses","35",null);



create table inscripcion(
    id int primary key auto_increment,
    id_curso varchar (100),
    id_alumno varchar(100),
    fecha varchar (15));        

insert into inscripcion (id_curso,id_alumno,fecha) values
("1","1","01/04/2022"),
("2","2","01/04/2022"),
("3","3","03/04/2022"),
("4","4","15/02/2022"),
("5","5","17/02/2022");