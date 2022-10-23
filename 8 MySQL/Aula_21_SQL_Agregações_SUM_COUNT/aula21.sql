# Funções SUM e COUNT

- SUM : Retorna a soma de todos os valores de uma coluna.
- COUNT : Retorna a quantidade de valores de registros em uma coluna.

Exemplo1:
SELECT SUM(investimento) FROM `tb_cursos`;
Soma todos os valores na coluna de Investimento.

Exemplo2:
SELECT SUM(investimento) FROM `tb_cursos` WHERE ativo = true;
Soma todos os valores na coluna de Investimento dos cursos ativos.

Exemplo3:
SELECT COUNT(*) FROM `tb_cursos` WHERE ativo = true;
Conta a quantidade de cursos ativos.

Exemplo4:
SELECT COUNT(*) FROM `tb_cursos`;
Conta a quantidade de todos os dados da tabela cursos.