# Editando nomes de Tabelas prontas

#### Quando Precisaremos renomear a tabela?

- Erros na digitação;
- Mudanças na estrutura da aplicação; entre outros fatores.


#### Função RENAME:
    
    RENAME TABLE `database`.`tabela_a_ser_renomeada` TO `database`.`novo_nome_da_tabela`;
    
    Exemplo:
    RENAME TABLE `db_curso_web`.`tb_cursos` TO `db_curso_web`.`tb_cursos_teste`;