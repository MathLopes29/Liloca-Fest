CREATE TABLE Cliente (
  idCliente INTEGER UNSIGNED  NOT NULL   AUTO_INCREMENT,
  Nome VARCHAR(30)  NULL  ,
  Email VARCHAR(25)  NULL  ,
  Ender VARCHAR(30)  NULL  ,
  Telefone INTEGER(11) UNSIGNED  NULL    ,
PRIMARY KEY(idCliente));



CREATE TABLE Produto (
  idProduto INTEGER UNSIGNED  NOT NULL   AUTO_INCREMENT,
  Nome VARCHAR(45)  NULL  ,
  Quantidade FLOAT  NULL  ,
  Valor_Unitario FLOAT  NULL    ,
PRIMARY KEY(idProduto));



CREATE TABLE Alimento (
  idAlimento INTEGER UNSIGNED  NOT NULL   AUTO_INCREMENT,
  Produto_idProduto INTEGER UNSIGNED  NOT NULL  ,
  Medida VARCHAR(15)  NULL    ,
PRIMARY KEY(idAlimento, Produto_idProduto)  ,
INDEX Alimento_FKIndex1(Produto_idProduto),
  FOREIGN KEY(Produto_idProduto)
    REFERENCES Produto(idProduto)
      ON DELETE NO ACTION
      ON UPDATE NO ACTION);



CREATE TABLE Bebida (
  idBebida INTEGER UNSIGNED  NOT NULL   AUTO_INCREMENT,
  Produto_idProduto INTEGER UNSIGNED  NOT NULL  ,
  Volume VARCHAR(20)  NULL    ,
PRIMARY KEY(idBebida, Produto_idProduto)  ,
INDEX Bebida_FKIndex1(Produto_idProduto),
  FOREIGN KEY(Produto_idProduto)
    REFERENCES Produto(idProduto)
      ON DELETE NO ACTION
      ON UPDATE NO ACTION);



CREATE TABLE Artificios_Festa (
  idArtificios_Festa INTEGER UNSIGNED  NOT NULL   AUTO_INCREMENT,
  Produto_idProduto INTEGER UNSIGNED  NOT NULL  ,
  Cor VARCHAR(20)  NULL  ,
  Tema VARCHAR(20)  NULL    ,
PRIMARY KEY(idArtificios_Festa, Produto_idProduto)  ,
INDEX Artificios_Festa_FKIndex1(Produto_idProduto),
  FOREIGN KEY(Produto_idProduto)
    REFERENCES Produto(idProduto)
      ON DELETE NO ACTION
      ON UPDATE NO ACTION);



CREATE TABLE Aniversario (
  idAniversario INTEGER UNSIGNED  NOT NULL   AUTO_INCREMENT,
  Cliente_idCliente INTEGER UNSIGNED  NOT NULL  ,
  Nome VARCHAR(30)  NULL  ,
  Idade VARCHAR(10)  NULL  ,
  Tema VARCHAR(15)  NULL  ,
  Cor VARCHAR(15)  NULL    ,
PRIMARY KEY(idAniversario)  ,
INDEX Aniversario_FKIndex1(Cliente_idCliente),
  FOREIGN KEY(Cliente_idCliente)
    REFERENCES Cliente(idCliente)
      ON DELETE NO ACTION
      ON UPDATE NO ACTION);



CREATE TABLE Pedido (
  idPedido INTEGER UNSIGNED  NOT NULL   AUTO_INCREMENT,
  Aniversario_idAniversario INTEGER UNSIGNED  NOT NULL  ,
  Data_Prazo VARCHAR(15)  NULL  ,
  Data_Pedido DATETIME  NULL  ,
  Valor_Sinal INTEGER UNSIGNED  NULL  ,
  Valor_Total INTEGER UNSIGNED  NULL  ,
  Valor_Frete INTEGER UNSIGNED  NULL    ,
PRIMARY KEY(idPedido)  ,
INDEX Pedido_FKIndex2(Aniversario_idAniversario),
  FOREIGN KEY(Aniversario_idAniversario)
    REFERENCES Aniversario(idAniversario)
      ON DELETE NO ACTION
      ON UPDATE NO ACTION);



CREATE TABLE Itens (
  Produto_idProduto INTEGER UNSIGNED  NOT NULL  ,
  Pedido_idPedido INTEGER UNSIGNED  NOT NULL  ,
  Quantidade VARCHAR(30)  NULL  ,
  Valor_Total INTEGER UNSIGNED  NULL  ,
PRIMARY KEY(Produto_idProduto, Pedido_idPedido)  ,
INDEX Produto_has_Pedido_FKIndex1(Produto_idProduto)  ,
INDEX Produto_has_Pedido_FKIndex2(Pedido_idPedido),
  FOREIGN KEY(Produto_idProduto)
    REFERENCES Produto(idProduto)
      ON DELETE NO ACTION
      ON UPDATE NO ACTION,
  FOREIGN KEY(Pedido_idPedido)
    REFERENCES Pedido(idPedido)
      ON DELETE NO ACTION
      ON UPDATE NO ACTION);



CREATE TABLE Entrega (
  idEntrega INTEGER UNSIGNED  NOT NULL   AUTO_INCREMENT,
  Pedido_idPedido INTEGER UNSIGNED  NOT NULL  ,
  Data_Entrega DATETIME  NULL  ,
  Ender_Entrega VARCHAR(30)  NULL  ,
  Valor_Restante INTEGER UNSIGNED  NULL    ,
PRIMARY KEY(idEntrega, Pedido_idPedido)  ,
INDEX Entrega_FKIndex1(Pedido_idPedido),
  FOREIGN KEY(Pedido_idPedido)
    REFERENCES Pedido(idPedido)
      ON DELETE NO ACTION
      ON UPDATE NO ACTION);



