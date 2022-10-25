# Intodução a Junções (JOINS) entre tabelas.

LEFT JOIN;      -- Junção à esquerda.
INNER JOIN;     -- Junção interna.
RIGHT JOIN;     -- Junção à direita.



## LEFT JOIN:
Prioriza todos os registros da tabela a esquerda + CASO EXISTA, todos os registros da tabela a direita.

- Exemplo1:
SELECT * FROM tb_clientes LEFT JOIN tb_pedidos ON (tb_clientes.id_cliente = tb_pedidos.id_cliente);
- Exemplo2:
SELECT * FROM tb_produtos LEFT JOIN tb_imagens ON (tb_produtos.id_produto = tb_imagens.id_produto);



## RIGHT JOIN:
Prioriza todos os registros da tabela a direita + CASO EXISTA, todos os registros da tabela a esquerda.

- Exemplo1:
SELECT * FROM tb_clientes LEFT JOIN tb_pedidos ON(tb_clientes.id_cliente = tb_pedidos.id_cliente);

- Exemplo2:
SELECT * FROM tb_clientes RIGHT JOIN tb_pedidos ON(tb_clientes.id_cliente = tb_pedidos.id_cliente);


## INNER JOIN:
Prioriza todos os registros da tabela a direita e a esquerda em que existam relacionamentos entre registros.

- Exemplo1:
INSERT INTO tb_produtos(produto, valor) VALUES ('HD Externo Portátil Seagate Expansion 1TB USB 3.0', 274.90);

- Exemplo2:
SELECT * FROM tb_pedidos LEFT JOIN tb_pedidos_produtos ON (tb_pedidos.id_pedido = tb_pedidos_produtos.id_pedido);

- Exemplo3:
SELECT * FROM tb_pedidos LEFT JOIN tb_pedidos_produtos ON (tb_pedidos.id_pedido = tb_pedidos_produtos.id_pedido) LEFT JOIN tb_produtos ON (tb_pedidos_produtos.id_produto = tb_produtos.id_produto)

- Exemplo4:
SELECT * FROM tb_pedidos RIGHT JOIN tb_pedidos_produtos ON (tb_pedidos.id_pedido = tb_pedidos_produtos.id_pedido) LEFT JOIN tb_produtos ON (tb_pedidos_produtos.id_produto = tb_produtos.id_produto)

- Exemplo5:
SELECT * FROM tb_pedidos INNER JOIN tb_pedidos_produtos ON (tb_pedidos.id_pedido = tb_pedidos_produtos.id_pedido);

- Exemplo6:
SELECT * FROM tb_pedidos INNER JOIN tb_pedidos_produtos ON (tb_pedidos.id_pedido = tb_pedidos_produtos.id_pedido) INNER JOIN tb_produtos ON (tb_pedidos_produtos.id_produto = tb_produtos.id_produto)
