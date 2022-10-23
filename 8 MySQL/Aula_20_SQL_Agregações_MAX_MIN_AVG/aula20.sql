# Funções de agregação
Permitir uma função aritimética em uma coluna numa tabela.

- MAX : Retorna o maior valor de todos os registros com base em uma coluna;
- MIN : Retorna o menor valor de todos os registros com base em uma coluna;
- AVG : Retorna a média de todos os registros com base em uma coluna.

SELECT função(MAX,MIN,AVG) FROM tabela WHERE filtro;

Exemplo1:
SELECT MIN(investimento) FROM `tb_cursos`;
Retorna o valor minimo de investimento em cursos.

Exemplo2:
SELECT MIN(investimento) FROM `tb_cursos` WHERE ativo = true;
Retorna o valor minimo de investimento em cursos que esteja ativo.


Exemplo3:
SELECT MAX(investimento) FROM `tb_cursos` WHERE ativo = true;
Retorna o valor maximo de investimento em cursos que esteja ativo.


Exemplo4:
SELECT AVG(investimento) FROM `tb_cursos` WHERE ativo = true;
Retorna o valor médio de investimento em cursos que esteja ativo.