CREATE TABLE IF NOT EXISTS CasaCuore.usuarios(
	login VARCHAR(64) NOT NULL,
	hash VARCHAR(255) NOT NULL,
	tipo_conta ENUM ('Pessoa','Educador'),
	cpf VARCHAR (11) NOT NULL,
	PRIMARY KEY(login),
	FOREIGN KEY(cpf) REFERENCES CasaCuore.pessoas(cpf)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
