-- -----------------------------------------------------
-- Schema lojaCalcados
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS lojacalcados;
USE lojacalcados ;

-- -----------------------------------------------------
-- Table Fornecedor
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS Fornecedor (
  idFornecedor INT NOT NULL AUTO_INCREMENT,
  nomeFornecedor VARCHAR(45) NOT NULL,
  cnpj CHAR(18) NOT NULL,
  telFornecedor VARCHAR(15) NOT NULL,
  emailFornecedor VARCHAR(100) NOT NULL,
  PRIMARY KEY (idFornecedor),
  UNIQUE INDEX cnpj_UNIQUE (cnpj ASC))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table Produto
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS Produto (
  idProduto INT NOT NULL AUTO_INCREMENT,
  nomeProduto VARCHAR(60) NOT NULL,
  precoFinal FLOAT NOT NULL,
  precoCusto FLOAT NOT NULL,
  idFornecedor INT NOT NULL,
  PRIMARY KEY (idProduto, idFornecedor),
  UNIQUE INDEX nomeProduto_UNIQUE (nomeProduto ASC),
  INDEX fk_Estoque_Fornecedor1_idx (idFornecedor ASC),
  CONSTRAINT fk_Estoque_Fornecedor1
    FOREIGN KEY (idFornecedor)
    REFERENCES Fornecedor (idFornecedor)
    ON DELETE CASCADE
    ON UPDATE CASCADE)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table Usuario
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS Usuario (
  idUsuario INT NOT NULL AUTO_INCREMENT,
  nomeUsuario VARCHAR(60) NOT NULL,
  cpf CHAR(14) NOT NULL,
  telefoneUsuario VARCHAR(15) NOT NULL,
  emailUsuario VARCHAR(100) NOT NULL,
  enderecoUsuario VARCHAR(200) NOT NULL,
  loginUsuario VARCHAR(100) NOT NULL,
  senhaUsuario VARCHAR(45) NOT NULL,
  PRIMARY KEY (idUsuario),
  UNIQUE INDEX cpf_UNIQUE (cpf ASC))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table Compra
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS Compra (
  idCompra INT NOT NULL AUTO_INCREMENT,
  idProduto INT NOT NULL,
  idUsuario INT NOT NULL,
  formaPagamento TINYINT NOT NULL,
  qtdeCompra INT NOT NULL,
  PRIMARY KEY (idCompra, idProduto, idUsuario),
  INDEX fk_Produtos_has_Clientes_Clientes1_idx (idUsuario ASC),
  INDEX fk_Produtos_has_Clientes_Produtos_idx (idProduto ASC),
  CONSTRAINT fk_Produtos_has_Clientes_Produtos
    FOREIGN KEY (idProduto)
    REFERENCES Produto (idProduto)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT fk_Produtos_has_Clientes_Clientes1
    FOREIGN KEY (idUsuario)
    REFERENCES Usuario (idUsuario)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table Estoque
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS Estoque (
  idProduto INT NOT NULL,
  idFornecedor INT NOT NULL,
  tamanhoProduto TINYINT(2) NOT NULL,
  qtdeProduto INT NULL,
  PRIMARY KEY (idProduto, idFornecedor, tamanhoProduto),
  CONSTRAINT fk_table1_Produto1
    FOREIGN KEY (idProduto , idFornecedor)
    REFERENCES Produto (idProduto , idFornecedor)
    ON DELETE CASCADE
    ON UPDATE CASCADE)
ENGINE = InnoDB;
