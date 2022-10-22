# Usando os operadores de comparação para filtragem de dados.

SELECT * FROM 'tb_alunos' WHERE ...; // ... = usa-se os operadores e a lógica;

exemplo:

SELECT * FROM 'tb_alunos' WHERE interesse = 'Jogos';

ira filtrar todos os dados que contenham a coluna 'interesse', com o valor 'jogos'.


exemplo 2:

SELECT * FROM `tb_alunos` WHERE idade >= 35;

ira filtrar todos os dados que contenham a coluna 'idade' maior ou igual ao valor '35';