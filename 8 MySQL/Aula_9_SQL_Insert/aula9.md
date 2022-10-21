# Insert :: Inserindo Dados em Tabelas

- Sistema Operacional : Windows
  - SGBD MySQL : PhpMyAdmin
    - Banco de Dados : db_curso_web
      - Tabela : tb_cursos


#### Comando INSERT

INSERT INTO banco_de_dados(coluna1, coluna2, ...) VALUES(valor1, valor2,...);

Exemplo:
INSERT into tb_cursos(`id_curso`,`imagem_curso`,`nome_curso`,`resumo`,`data_cadastro`,`ativa`,`investimento`,`carga_horaria`) values(2,'curso_angular.jpg','Web completo com JS, TS e Angular','Aprenda a Criar aplicaçõs front-end incriveis com JS, TS e Angular','2022-10-22 19:34:00',1,575.86,35);