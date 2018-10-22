CREATE TABLE Pessoa (
    idPessoa INT AUTO_INCREMENT,
    Nome VARCHAR(255),
    Email VARCHAR(255),
    DataNascimento DATE,
    PRIMARY KEY(idPessoa)
);

CREATE TABLE Dependentes(
	idDependente INT AUTO_INCREMENT,
    Nome VARCHAR(255),
    DataNascimento DATE,
    Relacao VARCHAR(255),
    idPessoa int,
    PRIMARY KEY(idDependente),
    FOREIGN KEY (idPessoa) REFERENCES Pessoa(idPessoa)
);