# Tabelas e Tipos de Dados

- O que são tabelas;
  - Semelhante a uma planilha, tem numero finito de colunas (titulo dos registros) e infinitos de linhas (registros).
  

- O que são tipos de dados.
  - Cada coluna de uma tabela, é responsável pelo armazenamento de um tipo de dado específico (int, float, text, boolean, data) assim como tamanho do dado.

- Tipos de dados:
  
  - Campos de Texto:
    - Text (Armazena grande quantidade de caracteres);
    - Varchar (Armazena de 0 a 255 caracteres no BD);
    - Char (tamanho fixo de 0 a 255 caracteres no BD).
  
  - Campos Numéricos:
    - Int (Valores numericos Inteiros);
    - Float (valores numéricos Fracionados).
  
  - Campos de data e Hora:
    - Date (data no formato YYYY/mm/dd);
    - Time (hora);
    - Datetime (combinação de date e time em um mesmo registro).

- Praticando no SGBD PHP MYadmim.

- Criando tabela com SQL:

    CREATE TABLE tb_cursos ();

    exemplo:

    CREATE TABLE tb_cursos ( id_curso int not null, imagem_curso varchar(100) not null, nome_curso char(50) not null, resumo text null, data_cadastro datetime not null, ativa boolean DEFAULT true, investimento float(5,2) DEFAULT 0 );

- Deletando Tabela com SQL:

    drop TABLE nome_da_tabela;

    exemplo:

    drop TABLE tb_cursos;