# Comando SELECT

SELECT colunas FROM tabelas;

colunas: pode ser mais de uma, separadas por virgulas.

Exemplo:
SELECT `ativa`,`carga_horaria`,`data_cadastro`,`id_curso`,`imagem_curso`,`investimento`,`nome_curso`,`resumo` FROM `tb_cursos`;


Exemplo2 :
SELECT * FROM `tb_cursos` WHERE 1;

onde "*" ira selecionar TODAS as colunas!!!
atenção no uso do '*'.