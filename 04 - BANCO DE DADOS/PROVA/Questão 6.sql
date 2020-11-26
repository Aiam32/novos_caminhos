-- ENUNCIADO 
O setor financeiro da nossa empresa, está querendo saber 
os menores e maiores valores dos produtos, que vendemos.

Para isso exiba somente o maior e o menor preço da tabela produtos.

-- ESQUEMA DAS TABELAS A SEREM CRIADAS

TABELA PRODUCTS
Coluna	    Tipo
id (PK)	    numeric	
name    	varchar
amount  	numeric
price   	numeric 

-- VALORES A SEREM INSERIDOS DENTRO DA TABELA 

id	    name                    amount      price
1       Two-doors wardrobe      100         800
2       Dining table            1000    	560
3   	Towel holder        	10000   	25.50
4   	Computer desk       	350	        320.50
5   	Chair               	3000    	210.64
6   	Single bed          	750     	460 

-- EXEMPLO DE SAÍDA ESPERADO
price	    price
800         25.50

/////////////////////////////////////////////////////

RESOLUÇÃO:

/* Selecione e execute os códigos na ordem 1., 2., 3. respectivamente. */ 

1.

CREATE TABLE products (
    id numeric PRIMARY KEY,
    name varchar(225),
    amount INTEGER,
    price FLOAT
);

2.

INSERT INTO products (id, name, amount, price)
VALUES
    (1,	'Two-doors wardrobe',  '100',	'800'),
    (2,	'Dining table',	 '1000',  '560'),
    (3,	'Towel holder',	 '10000',  '25.50'),
    (4,	'Computer desk',  '350',  '320.50'),
    (5,	'Chair',  '3000',  '210.64'),
    (6,	'Single bed',  '750',  '460');

3.

SELECT max(price) as MAIOR, min(price) AS MENOR FROM products;