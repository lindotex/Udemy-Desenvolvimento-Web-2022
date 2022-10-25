CREATE TABLE tb_cursos ( id_curso int not null, imagem_curso varchar(100) not null, nome_curso char(50) not null, resumo text null, data_cadastro datetime not null, ativa boolean DEFAULT true, investimento float(5,2) DEFAULT 0 );