-- -----------------------------------------------------
-- Schema lojaCalcados
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS lojaCalcados;
USE lojaCalcados ;

-- -----------------------------------------------------
-- Table Fornecedor
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS fornecedores (
  id INT NOT NULL AUTO_INCREMENT,
  nomeFornecedor VARCHAR(45) NOT NULL,
  cnpj CHAR(18) NOT NULL,
  telFornecedor VARCHAR(15) NOT NULL,
  emailFornecedor VARCHAR(100) NOT NULL,
  PRIMARY KEY (id),
  UNIQUE INDEX cnpj_UNIQUE (cnpj));


-- -----------------------------------------------------
-- Table Produto
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS produtos (
  id INT NOT NULL AUTO_INCREMENT,
  nomeProduto VARCHAR(60) NOT NULL,
  precoFinal FLOAT NOT NULL,
  precoCusto FLOAT NOT NULL,
  fornecedores_id INT NOT NULL,
  PRIMARY KEY (id, fornecedores_id),
  UNIQUE INDEX nomeProduto_UNIQUE (nomeProduto),
  INDEX produto_idx (fornecedores_id),
    FOREIGN KEY (fornecedores_id)
    REFERENCES fornecedores (id)
     ON DELETE NO ACTION
     ON UPDATE CASCADE);


-- -----------------------------------------------------
-- Table Usuario
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS usuarios (
  id INT NOT NULL AUTO_INCREMENT,
  nomeUsuario VARCHAR(60) NOT NULL,
  cpf CHAR(14) NOT NULL,
  telefoneUsuario VARCHAR(15) NOT NULL,
  emailUsuario VARCHAR(100) NOT NULL,
  enderecoUsuario VARCHAR(200) NOT NULL,
  loginUsuario VARCHAR(100) NOT NULL,
  senhaUsuario VARCHAR(45) NOT NULL,
  PRIMARY KEY (id),
  UNIQUE INDEX cpf_UNIQUE (cpf));



-- -----------------------------------------------------
-- Table Compra
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS compras (
  id INT NOT NULL AUTO_INCREMENT,
  produtos_id INT NOT NULL,
  usuarios_id INT NOT NULL,
  formaPagamento TINYINT NOT NULL,
  qtdeCompra INT NOT NULL,
  PRIMARY KEY (id, produtos_id, usuarios_id),
  INDEX compra_us_idx (usuarios_id),
  INDEX compra_prod_idx (produtos_id),
    FOREIGN KEY (produtos_id)
    REFERENCES produtos (id)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
    FOREIGN KEY (usuarios_id)
    REFERENCES usuarios (id)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION);


-- -----------------------------------------------------
-- Table Estoque
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS estoques (
  produtos_id INT NOT NULL,
  fornecedores_id INT NOT NULL,
  id TINYINT(2) NOT NULL,
  qtdeProduto INT NULL,
  PRIMARY KEY (produtos_id, fornecedores_id, id),
    FOREIGN KEY (produtos_id)
    REFERENCES produtos (id),
    FOREIGN KEY (fornecedores_id)
    REFERENCES fornecedores (id)
    ON DELETE CASCADE
    ON UPDATE CASCADE);



