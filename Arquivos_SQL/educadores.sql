CREATE TABLE IF NOT EXISTS CasaCuore.educadores (
	cpf CHAR(11) NOT NULL,
	conta_bancaria VARCHAR(40),
    salario FLOAT,
	PRIMARY KEY (cpf),
	FOREIGN KEY (cpf) REFERENCES CasaCuore.pessoas(cpf)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;