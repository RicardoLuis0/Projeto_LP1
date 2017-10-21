CREATE DATABASE IF NOT EXISTS 'CasaCuore' CHARACTER SET utf8 COLLATE utf8_general_ci;;
CREATE TABLE IF NOT EXISTS 'CasaCuore'.'pessoas'(
	'cpf' CHAR(11) NOT NULL,
	'nome' VARCHAR(64) NOT NULL,
	'foto' VARCHAR(64) NOT NULL,
	'nascimento' DATE NOT NULL,
	'responsavel' BOOLEAN NOT NULL,
	'email' VARCHAR(64) NOT NULL,
	'profissao' VARCHAR(64) NOT NULL,
	'endereco' VARCHAR(64) NOT NULL,
	'telefone' VARCHAR(20) NOT NULL,
	PRIMARY KEY('cpf')
) ENGINE=InnoDB DEFAULT CHARSET=utf8;