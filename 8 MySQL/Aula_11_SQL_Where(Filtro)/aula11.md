# WHERE :: Filtrando Dados em Tabelas
Comando utilizado como método de filtragem.


- Sistema Operacional : Windows;
  - SGBD MySQL : PhpMyAdmin;
    - Banco de Dados : db_curso_web;
      - Tabela : tb_cursos.

Exemplos:

- SELECT id_curso, nome_curso FROM tb_curso WHERE investimento < 550.00;
Selecione 'id_curso, nome_curso' da tabela 'tb_curso' todos os dados em que 'investimento < 550.00'.

- SELECT id_curso, nome_curso FROM tb_curso WHERE investimento < 550.00 AND carga_horaria > 30;
Selecione 'id_curso, nome_curso' da tabela 'tb_curso' todos os dados em que 'investimento < 550.00 AND carga_horaria > 30'.


#### Relembrando Operadores de comparação:

'=' Valor igual;
'<' Menor que;
'>' Maior que;
'<=' Menor ou igual;
'>=' Maior ou igual.

#### Operadores Lógicos

'AND' => Operador 'E';
'OR' => Operador 'OU'.