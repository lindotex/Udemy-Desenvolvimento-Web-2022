# Entendendo o Char e o Varchar:

- Char
  - Possui valor pré-definido fixo, ou seja, o espaço alocado continua reservado.
  
  exemplo:
    CHAR(10):

    Jorge (10 definidos, 5 usados e 5 reservados);

- Varchar
  - Possui valor definido, mas o espaço alocado será igual ao tamanho do dado apenas.

    exemplo:
    VARCHAR(10):

    Jorge (10 definidos, 5 usados 0 reservados);


# Vantagens e desvantagens no Char

- Prós
  - Mais rápido para pesquisa.
- Contras
  - Quando mau utilizado pode reservar espaço em disco de forma desnecessária.

# Vantagens e desvantagens no Varchar

- Prós
  - Por ser de tamanho variavel ocupa apenas o espaço necessário.
- Contras
  - Por ser de tamanho variavel, possui um meta dado com uma instrução de finalização do texto, o que produz, em relação ao CHAR, maior lentidão em pesquisas.