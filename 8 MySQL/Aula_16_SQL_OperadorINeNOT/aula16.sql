-- Operador IN :: FACILITANDO BUSCAS

SELECT * FROM `tb_alunos` WHERE interesse IN ('Jogos', 'Música', 'Esporte');

-- OPERADOR NOT IN :: 

SELECT * FROM `tb_alunos` WHERE interesse NOT IN ('Jogos', 'Música', 'Esporte');