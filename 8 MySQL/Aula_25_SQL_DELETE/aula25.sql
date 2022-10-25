# Instrução DELETE:

DELETE FROM tabela WHERE filtros;


Exemplo1:
DELETE FROM tb_alunos WHERE id_aluno = 5;

Exemplo2:
SELECT * FROM `tb_alunos` WHERE idade IN(10,18,22,28,34) AND interesse = 'Esporte';

Exemplo3:
DELETE FROM `tb_alunos` WHERE idade IN(10,18,22,28,34) AND interesse = 'Esporte';