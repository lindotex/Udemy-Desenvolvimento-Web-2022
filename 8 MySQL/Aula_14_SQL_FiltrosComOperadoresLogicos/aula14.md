# Filtros utilizando Operadores Lógicos

Filtros WHERE utilizando operadores Lógicos AND e OR.

## AND

SELECT FROM 'bd' where 'situação A' AND 'situação b';

exemplo:
SELECT * FROM `tb_alunos` WHERE interesse = 'jogos' and idade > 45 and estado = 'RN';

## OR 

SELECT FROM 'bd' where 'situação A' OR 'situação b';

Exemplo:
SELECT * FROM `tb_alunos` WHERE interesse = 'jogos' OR idade > 45 OR estado = 'RN';