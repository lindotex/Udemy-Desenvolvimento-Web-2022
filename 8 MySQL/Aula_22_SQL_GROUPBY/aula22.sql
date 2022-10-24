# Operador GROUP BY

Agrupa registros com base em uma ou mais colunas cujos valores sejam iguais. Permite realizar funções de agregação em cada subconjunto agrupado de registros.

SELECT coluna  FROM tabela  WHERE filtro GROUP BY ordenação LIMIT offset,limit;


Exemplo1:
SELECT * FROM `tb_alunos` GROUP BY interesse;

Exemplo2:
SELECT *, count(*) FROM `tb_alunos` GROUP BY interesse;

Exemplo3:
SELECT interesse, count(*) FROM `tb_alunos` GROUP BY interesse;


Exemplo4:
SELECT interesse, count(*) AS total_por_interesse FROM `tb_alunos` GROUP BY interesse;

Exemplo5:
SELECT * FROM `tb_alunos` GROUP BY estado;

Exemplo6:
SELECT estado, COUNT(*) AS total_por_interesse FROM `tb_alunos` WHERE estado = 'ES'; 