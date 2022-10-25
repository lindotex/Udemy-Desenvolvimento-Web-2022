# Utilizando o operador UPDATE

UPDATE tabela SET coluna=valor, coluna=valor, coluna=valor WHERE filtros;


Exemplo1:
UPDATE tb_alunos SET nome = 'João' WHERE id_aluno = 13;

Exemplo2:
UPDATE tb_alunos SET interesse = 'Saúde' WHERE idade >=80;

Exemplo3:
UPDATE tb_alunos SET nome = 'João' WHERE id_aluno = 18;

Exemplo4:
UPDATE tb_alunos SET nome = 'José', idade = 25, email = 'jose@gmail.com' WHERE id_aluno = 18;

Exemplo5:
SELECT * FROM `tb_alunos` WHERE idade BETWEEN 18 AND 25 AND estado = 'PA';