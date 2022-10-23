# Operador ORDERBY

Permite a seleção de dados de forma ordenada.

SELECT coluna FROM tabela WHERE filtro ORDER BY dado1 ASC, dado2 DESC;

Irá filtrar uma seleção de dado1 ascendente e dado2 descendente dentro do filtro.


Exemplo1:

SELECT * FROM `tb_alunos` WHERE idade BETWEEN 18 and 59 order by nome ASC;
ordena de forma ascendente os registros de idade filtrados entre 18 e 59.

Exemplo2:

SELECT * FROM `tb_alunos` WHERE idade BETWEEN 18 and 59 order by nome DESC;
ordena de forma descendente os registros de idade filtrados entre 18 e 59.


Exemplo3:

SELECT * FROM `tb_alunos` WHERE idade BETWEEN 18 and 59 order by nome asc, idade desc, estado ASC;
Ordena em primeiro lugar, os nomes de forma ascendentes, dentro de cada filtro, ordena de forma descendente a idade, e dentro de cada filtro, ordena os estados de forma ascendente.
