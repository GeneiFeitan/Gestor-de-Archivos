create database GestionArchivos;
	use GestionArchivos;

	create table Area(idArea int primary key, NomArea char(20), Edificio char(40), tipo char(20));

		create table Privilegio(idPrivilegio int primary key, nombrePri char(20));


	create table Usuario(idUsuario int primary key auto_increment, Nombre char(50), Contra char(30), ApePat char(50), ApeMat char(50),
		telefono char(12), correo char(50), fechaNac char(20), estado char(30), timeLogin char(20), timeLogout char(20), idArea int, idPrivilegio int,
		foreign key (idArea)references Area(idArea),
		foreign key (idPrivilegio)references Privilegio(idPrivilegio));

	create table Archivos(idArchivos int primary key auto_increment, Nombre char(100), fecha datetime, idUsuario int, idArea int, ruta char(30),descripcion char(50),
		foreign key (idArea)references Area(idArea),
		foreign key (idUsuario)references Usuario(idUsuario));

	create table Minuta(id_minuta int primary key auto_increment, nombreMin char(50),
fecha date, asistentes text,informes text,motivo text,anuncios text,idArea int,
foreign key(idArea) references Area(idArea));

create table Evento(id_evento int primary key auto_increment, nombre_evento char(50),
fecha_evento date, ubicacion char(50),idArea int,
foreign key(idArea) references Area(idArea));

alter table minuta add resp3 text;
alter table minuta add puesto3 text;
alter table minuta add resp4 text;
alter table minuta add puesto4 text;
alter table minuta add resp5 text;
alter table minuta add puesto5 text;
alter table minuta add resp6 text;
alter table minuta add puesto6 text;
alter table minuta add resp7 text;
alter table minuta add puesto7 text;
alter table minuta add resp8 text;
alter table minuta add puesto8 text;



/*
	FER
create database gestorArchivos;
use gestorArchivos;

create table Area(id_area int primary key auto_increment, NomArea char(20), Edificio char(40), 
	tipo char(20));

create table Privilegio(id_Privilegio int primary key auto_increment, nombrePri char(20));

create table Usuario(idUsuario int primary key auto_increment, Nombre char(50), ApePat char(50), ApeMat char(50),
telefono char(12), correo char(50), id_area int, id_Privilegio int,
foreign key(id_area) references Area(id_area),
foreign key(id_Privilegio) references Privilegio(id_Privilegio));

create table Minuta(id_minuta int primary key auto_increment, nombreMin char(50),
fecha date, motivo char(50),id_area int,
foreign key(id_area) references area(id_area));

create table Evento(id_evento int primary key auto_increment, nombre_evento char(50),
fecha_evento date, ubicacion char(50),idArea int,
foreign key(idArea) references area(idArea));

create table Reporte(id_rep int primary key auto_increment, nombreRep char(50),
fachaRep date, idUsuario int, id_area int,foreign key(idUsuario) references Usuario(idUsuario),
foreign key(id_area) references area(id_area));

create table Archivo(idArchivo int primary key auto_increment, NomArchivo char(30), fecha datetime, idUsuario int, id_area int,
foreign key(id_area) references Area(id_area),
foreign key(idUsuario) references Usuario(idUsuario));



*/







