CREATE TABLE IF NOT EXISTS CasaCuore.usuarios(
	login VARCHAR(64) NOT NULL,
	hash VARCHAR(255) NOT NULL,
	tipo_conta ENUM ('Pessoa','Educador','Admin'),
	cpf VARCHAR (11),
	PRIMARY KEY(login)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
