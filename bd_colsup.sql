CREATE TABLE personas (
  PNA_CODIGO bigint primary key AUTO_INCREMENT,
  PNA_FOTO char(30) default null,
  PNA_DOC_IDENTIDAD bigint NOT NULL UNIQUE,
  PNA_NOMBRE char(30) NOT NULL,
  PNA_APELLIDO char(30) NOT NULL,
  PNA_USUARIO char(30) UNIQUE default null,
  PNA_PASSWORD char(40) default null, 
  PNA_FECHA_NACIMIENTO date not null,
  PNA_DIRECCION char(100) default null, 
  PNA_TELEFONO bigint default null
) ENGINE=InnoDB;