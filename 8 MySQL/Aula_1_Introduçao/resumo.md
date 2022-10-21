# O que é MySQL

SGBD - Sistema de Gerenciador de Banco de Dados.

- Relacional
- Gratuito
- SQL (Structured Query Language) : Linguagem de Consulta Estruturada.

'Aplicações' <-SQL->  'SGBD (MySQL)' <-Require-> 'Servidor BD'

# Relacional:

Tabelas e registros relacionados entre si.

<table name="TABELA_CURSO">
    <tr>
        <th>TABELA_CURSO</th>        
    </tr>
    <tr>
        <td>id_curso</td> <!-- RELACIONAL A TABELA_ALUNOS_CURSO-->
        <td>nome_curso</td>
        <td>descricao_curso</td>
    </tr>
</table>

<table name="TABELA_ALUNOS">
    <tr>
        <th>TABELA_ALUNOS</th>        
    </tr>
    <tr>
        <td>id_aluno</td> <!-- RELACIONAL A TABELA_ALUNOS_CURSO-->
        <td>nome_aluno</td>
    </tr>
</table>

<table name="TABELA_ALUNOS_CURSO">
    <tr>
        <th>TABELA_ALUNOS_CURSO</th>        
    </tr>
    <tr>
        <td>id_aluno_curso</td> 
        <td>id_curso</td> <!-- RELACIONAL A TABELA_CURSO-->
        <td>id_aluno</td> <!-- RELACIONAL A TABELA_ALUNOS-->
    </tr>
</table>