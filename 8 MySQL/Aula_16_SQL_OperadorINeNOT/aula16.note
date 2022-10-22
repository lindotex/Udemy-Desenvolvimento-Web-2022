# Utilizando o operador IN e NOT IN

Facilitar a escrita de busca em uma mesma coluna:

antes:
WHERE interesses = 'Jogos' OR interesses = 'Música' OR interesses = 'Esporte';

## com o IN:
Busca por todos os registros que contenham os campos designados.

WHERE interesses IN('Jogos','Música','Esporte');

Exemplo 1:

SELECT * FROM `tb_alunos` WHERE interesse IN ('Jogos', 'Música', 'Esporte');


## com o NOT IN:
Busca por todos os campos em que não contenham os valores designados.



Exemplo 2: 
SELECT * FROM `tb_alunos` WHERE interesse NOT IN ('Jogos', 'Música', 'Esporte');