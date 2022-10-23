# SELECT Limitando o retorno.

SELECT coluna FROM tabela WHERE filtro ORDER BY ordenacao (LIMIT xz OFFSET 2) ou (LIMIT 2,5);


Exemplo:
SELECT * FROM `tb_alunos` LIMIT 25;
Exibirá os 25 primeiros dados dos alunos.

Exemplo2:
SELECT * FROM `tb_alunos` ORDER BY id_aluno DESC LIMIT 25;
Exibirá 25 dos id_aluno de forma descendente, ou seja, do ultimo para o primeiro.
exibindo os 25 ultimos.

Exemplo3:
Muito utilizado para paginação de sites:

SELECT * FROM `tb_alunos` LIMIT 4 OFFSET 0;
Exibe a lista de 4 dos alunos a partir do oitavo. (0,1,2 e 3)
SELECT * FROM `tb_alunos` LIMIT 4 OFFSET 4;
Exibe a lista de 4 dos alunos a partir do oitavo. (4,5,6 e 7)
SELECT * FROM `tb_alunos` LIMIT 4 OFFSET 8;
Exibe a lista de 4 dos alunos a partir do oitavo. (8,9,10 e 11)