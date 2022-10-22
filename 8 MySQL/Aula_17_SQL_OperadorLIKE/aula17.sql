# Operador LIKE

Permite realizar filtragem com base em uma pesquisa de caracteres dentro de uma coluna textual.

Caracteres curingas:
- '%' : Indica que pode haver a existencia em qualquer conjunto de caracter no texto:

[...] WHERE 'nome' LIKE 'Evelyn';       // Iguais a 'Evelyn'
[...] WHERE 'nome' LIKE '%e';           // Finalizados em 'e'
[...] WHERE 'nome' LIKE '%a%';          // Tenham um 'a' no meio
[...] WHERE 'nome' LIKE 'C%';           // Comecem com 'C'

- '_' : Indica que pode haver a existência de um ou mais caracteresem um posição específica do texto.

[...] WHERE 'nome' LIKE '_riel';        // Que tenha 1 caracter indefinido e termine com riel
[...] WHERE 'nome' LIKE '_ru_';         // Que contenha 1 caracter indefinido, 'ru' e outro indefinido
[...] WHERE 'nome' LIKE 'I_ _';         // Que contenha 1 caracter 'U' e dois indefinidos.

ou ambos:

[...] WHERE 'nome' LIKE '%tt_';

-- Exemplo 1
-- Usando o Coringa %
SELECT * FROM `tb_alunos` WHERE nome LIKE '%e';
SELECT * FROM `tb_alunos` WHERE nome LIKE '%a%';
SELECT * FROM `tb_alunos` WHERE nome LIKE 'C%';

-- Exemplo 2
-- Usando o coringa _
SELECT * FROM `tb_alunos` WHERE nome LIKE '_riel';
SELECT * FROM `tb_alunos` WHERE nome LIKE '_ru_';
SELECT * FROM `tb_alunos` WHERE nome LIKE 'I__';

-- Exemplo 3
-- Usando ambos os coringas
SELECT * FROM `tb_alunos` WHERE nome LIKE '%tt_';