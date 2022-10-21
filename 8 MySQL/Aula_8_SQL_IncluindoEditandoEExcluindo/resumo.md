# Incluindo, Editando ou Removendo colunas da Tabela

## função ALTER TABLE

### ADD
Permite a inclusão de uma nova coluna em uma tabela.

ALTER TABLE <nomeDaTabela> ADD <nomeDaColuna> <tipoDeDado> NOT NULL ;

exemplo:
ALTER TABLE `tb_cursos` ADD `carga_horaria` VARCHAR(5) NOT NULL ;

exemplo2:
ALTER TABLE tb_cursos ADD COLUMN carga_horaria VARCHAR(5) not null;

### CHANGE
Permite a alteração do nome de uma coluna e de suas propriedades, como por exemplo o tipo.


ALTER TABLE <nomeDaTabela> CHANGE <nomeDaColuna> <nomeDaColuna> <tipoDeDado> NOT NULL;

exemplo:
ALTER TABLE tb_cursos CHANGE carga_horaria carga_hora INT(5) NULL;

exemplo:
ALTER TABLE `tb_cursos` CHANGE `carga_horaria` `carga_horaria` INT NOT NULL;

### DROP
Permite a remoção de uma coluna da tabela.


ALTER TABLE <nomeDaTabela> DROP <nomeDaColuna>;

exemplo:
ALTER TABLE `tb_cursos` DROP `carga_horaria`;

exemplo 2:
ALTER TABLE tb_cursos DROP carga_horaria;

