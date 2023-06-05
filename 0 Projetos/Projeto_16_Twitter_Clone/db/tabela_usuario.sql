create table usuarios(
    id int not null PRIMARY key AUTO_INCREMENT,
    nome varchar(250) not null,
    email varchar(80) not null,
    senha varchar(100) not null,
    id_usuario_seguindo int not null);
