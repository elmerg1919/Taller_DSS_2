Create Database Alumnos

Create table Estudiante(
	IdEstudiante serial primary key,
	Carnet varchar (8),
	nombre varchar (30),
	apellido varchar(30),
	Municipio varchar (30),
	Departamento varchar(30)
	)