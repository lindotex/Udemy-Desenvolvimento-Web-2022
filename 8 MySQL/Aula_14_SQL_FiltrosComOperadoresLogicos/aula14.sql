--Exemplo 1 --
SELECT * FROM `tb_alunos` WHERE interesse = 'jogos' and idade > 45 and estado = 'RN';

-- Exemplo 2 --
SELECT * FROM `tb_alunos` WHERE interesse = 'jogos' OR idade > 45 OR estado = 'RN';