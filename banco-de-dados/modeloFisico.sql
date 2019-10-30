DROP DATABASE IF EXISTS dbsupport;
CREATE DATABASE dbsupport;
\c dbsupport;
	
DROP TABLE IF EXISTS setor;
CREATE TABLE setor(
	id_set INT NOT NULL,
	nome_set VARCHAR(30) NOT NULL,

	CONSTRAINT pk_id_set PRIMARY KEY(id_set)
);

DROP TABLE IF EXISTS funcionario;
CREATE TABLE funcionario(
	login_func VARCHAR(10) NOT NULL,
	senha_func VARCHAR(10) NOT NULL,
	email_func VARCHAR(50) NOT NULL,
	nome_func VARCHAR(20) NOT NULL,	
	id_set int,		

	CONSTRAINT pk_login_func PRIMARY KEY (login_func),
		
	CONSTRAINT fk_id_set FOREIGN KEY (id_set) 
	REFERENCES setor(id_set)
);

DROP TABLE IF EXISTS empresa;
CREATE TABLE empresa(
		cnpj_emp INT NOT NULL,
		nome_emp VARCHAR(30) NOT NULL,
	
		CONSTRAINT pk_cnpj_emp PRIMARY KEY (cnpj_emp)
);

DROP TABLE IF EXISTS cliente;
CREATE TABLE cliente(
	login_client VARCHAR(10) NOT NULL,
	senha_client VARCHAR(10) NOT NULL,
	email_client VARCHAR(50) NOT NULL,
	nome_client VARCHAR(20) NOT NULL,
	cnpj_emp INT,
	
	CONSTRAINT pk_login_client PRIMARY KEY(login_client),
	
	CONSTRAINT fk_cnpj_emp FOREIGN KEY(cnpj_emp) 
	REFERENCES empresa(cnpj_emp)
);

DROP TABLE IF EXISTS status;
CREATE TABLE status(
	sig_stat VARCHAR(3) NOT NULL,
	desc_stat VARCHAR(30) NOT NULL,
	prioridade_stat VARCHAR(5) NOT NULL,

	CONSTRAINT pk_sig_stat PRIMARY KEY (sig_stat)
);

DROP TABLE IF EXISTS ordem_servico;
CREATE TABLE ordem_servico(
	id_os INT NOT NULL,
	titulo_os VARCHAR(30) NOT NULL,
	abertura_os DATE NOT NULL,
	fim_os DATE,
	login_client VARCHAR(10),
	login_func VARCHAR(10),
	sig_stat VARCHAR(3),

	CONSTRAINT pk_id_os PRIMARY KEY (id_os),
	
	CONSTRAINT fk_login_client FOREIGN KEY (login_client)
	REFERENCES cliente(login_client),

	CONSTRAINT fk_login_func FOREIGN KEY (login_func)
	REFERENCES funcionario(login_func),

	CONSTRAINT fk_sig_stat FOREIGN KEY (sig_stat)
	REFERENCES status(sig_stat)
);

DROP TABLE IF EXISTS mensagem;
CREATE TABLE mensagem(
	id_msg INT NOT NULL,
	conteudo_msg VARCHAR(2000) NOT NULL,
	data_msg DATE NOT NULL,
	tipo_msg INT NOT NULL,
	client_msg INT,
	func_msg INT,
	id_os INT,
	login_client VARCHAR(10),
	login_func VARCHAR(10),

	CONSTRAINT pk_id_msg PRIMARY KEY (id_msg),

	CONSTRAINT fk_id_os FOREIGN KEY (id_os)
	REFERENCES ordem_servico(id_os),

	CONSTRAINT fk_login_client FOREIGN KEY (login_client)
	REFERENCES cliente(login_client),

	CONSTRAINT fk_login_func FOREIGN KEY (login_func)
	REFERENCES funcionario(login_func)
);
