/*Tabla ususarios*/

CREATE TABLE usuarios(
id_usuario varchar(100) not null primary key,
pass varchar(100) not null,
nombre varchar(100) not null,
ap_pa varchar(100) not null,
ap_ma varchar(100) not null,
numero varchar(20) not null,
correo varchar(250) not null,
bloqueo int(1) default 1,
re_pass boolean default false,
token varchar(50) null,
activate varchar(50) null,
nivel varchar(50) default 'usuario'
);

/*Tabla administradores*/

CREATE TABLE administrador(
id_admin varchar(100) not null primary key,
pass varchar(100) not null,
nombre varchar(100) not null,
ap_pa varchar(100) not null,
ap_ma varchar(100) not null,
numero varchar(20) not null,
correo varchar(250) not null,
re_pass boolean default false,
token varchar(50) null,
activate varchar(50) null,
bloqueo int(1) default 1,
nivel varchar(50) default 'admin'
);

/*Tabla Propietario*/

CREATE TABLE propietario(
id_propietario varchar(100) not null primary key,
pass varchar(100) not null,
nombre varchar(100) not null,
ap_pa varchar(100) not null,
ap_ma varchar(100) not null,
numero varchar(20) not null,
correo varchar(250) not null,
bloqueo int(1) default 1,
numero_casa int(100) null,
re_pass boolean default false,
token varchar(50) null,
activate varchar(50) null,
nivel varchar(50) default 'propietario'
);

/*Tabla preguntas*/

CREATE TABLE preguntas(
	varchar(100) not null primary key,
pregunta varchar(250) not null
);

/*Tabla propiedad*/

CREATE TABLE propiedad(
id_propiedad varchar(100) not null primary key,
id_propietario varchar(100) not null,
descripcion longtext null,
costo_dia varchar(50) not null,
costo_semana varchar(50) not null,
estatus varchar(100) Default 'validar',
tipo varchar(50) default 'casa',
numero_habitaciones varchar(20) not null,
personas_recomendadas varchar(20) not null,
codigo_postal varchar(100) not null,
calle varchar(250) not null,
num_ext varchar(50) not null,
num_int varchar(50) null,
en_calles varchar(250) not null,
ref varchar(250) not null,
asent varchar(250) not null,
mun varchar(250) not null,
bloqueo int(1) default 1,
estado varchar(250) not null,
des_temp varchar(3) not null
);

ALTER TABLE propiedad ADD CONSTRAINT FK_PROPIETARIO FOREIGN KEY (id_propietario) references propietario (id_propietario);

/*tabla evaluacion*/

CREATE TABLE evaluacion(
id_evaluacion varchar(100) not null primary key,
id_propiedad varchar(100) not null,
id_pregunta varchar(100) not null,
califiacion varchar(50) not null
);

ALTER TABLE evaluacion ADD CONSTRAINT FK_propiedadEva FOREIGN KEY (id_propiedad) references propiedad (id_propiedad);
ALTER TABLE evaluacion ADD CONSTRAINT FK_pregunta FOREIGN KEY (id_pregunta) references preguntas (id_pregunta);

/*Tabla imagenes*/

CREATE TABLE imagenes(
id_imagenes varchar(100) not null primary key,
id_propiedad varchar(100) not null,
principal boolean default false,
carpeta varchar(250) not null,
imagen varchar(250) not null
);

ALTER TABLE imagenes ADD CONSTRAINT FK_imagenes FOREIGN KEY (id_propiedad) references propiedad (id_propiedad);

/*Tabla reservación*/
CREATE TABLE reservacion(
id_reservacion varchar(100) not null primary key,
id_usuario varchar(100) not null,
id_propiedad varchar(100) not null,
id_admin varchar(100) not null,
fecha_entrada varchar(100) not null,
fecha_salida varchar(100) not null,
pago varchar(50) not null,
pagado boolean default false
);

ALTER TABLE reservacion ADD CONSTRAINT FK_usuario FOREIGN KEY (id_usuario) references usuarios (id_usuario);
ALTER TABLE reservacion ADD CONSTRAINT FK_propiedad FOREIGN KEY (id_propiedad) references propiedad (id_propiedad);
ALTER TABLE reservacion ADD CONSTRAINT FK_admin FOREIGN KEY (id_admin) references administrador (id_admin);