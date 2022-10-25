# Operação HEAVING


SELECT coluna FROM tabela WHERE filtro GROUP BY agrupamento HEAVING filtros_sobre_agrupamentos ORDER BY ordenação LIMIT offs,lim ;



Exemplo1:
SELECT estado, COUNT(*) as total_de_registros FROM `tb_alunos` GROUP BY estado;

Exemplo2:
SELECT estado, COUNT(*) as total_de_registros FROM `tb_alunos` GROUP BY estado HAVING total_de_registros >= 5;

Exemplo3:
SELECT estado, COUNT(*) as total_de_registros FROM `tb_alunos` GROUP BY estado HAVING estado IN ('MG', 'SP');

Exemplo4:
SELECT estado, COUNT(*) as total_de_registros FROM `tb_alunos` GROUP BY estado HAVING estado IN ('CE', 'SC') AND total_de_registros > 4;

Exemplo5:
SELECT estado, COUNT(*) as total_de_registros FROM `tb_alunos` WHERE interesse != 'Esporte' GROUP BY estado HAVING total_de_registros > 3;