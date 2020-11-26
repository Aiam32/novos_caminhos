
-- ENUNCIADO
Todos os meses a empresa pede um relatório das cidades que os fornecedores estão cadastrados. 
Dessa vez não vai ser diferente, faça uma consulta no Banco de Dados que retorne todas as cidades
dos fornecedores, mas em ordem alfabética.

OBS: Você não deve mostrar cidades repetidas.

-- ESQUEMA DAS TABELAS A SEREM CRIADAS

TABELA PROVIDERS
Coluna	        Tipo
id (PK)	        numeric	
name            varchar
street      	varchar
city        	varchar
state       	char

-- VALORES A SEREM INSERIDOS DENTRO DA TABELA PROVIDERS

id	name                street	        city	        state	
1	Henrique	        Av Brasil	    Rio de Janeiro	RJ	
2	Marcelo Augusto	    Rua Imigrantes	Belo Horizonte	MG
3	Caroline Silva	    Av São Paulo	Salvador	    BA	
4	Guilerme Staff      Rua Central	    Porto Alegre	RS	
5	Isabela Moraes	    Av Juiz Grande	Curitiba	    PR	
6	Francisco Accerr	Av Paulista	São Paulo	        SP 	    	 

-- EXEMPLO DE SAÍDA ESPERADO
city	
Belo Horizonte	
Curitiba	
Porto Alegre	
Rio de Janeiro	
Salvador	
São Paulo

//////////////////////////////////////////////////////////////

RESOLUÇÃO:

/* Selecione e execute os códigos na ordem 1., 2., 3. respectivamente. */ 

1.

CREATE TABLE providers (
    id numeric PRIMARY KEY,
    name varchar(50),
    street varchar(50),
    city varchar(50),
    state char(50)
);

2.

INSERT INTO providers (id, name, street, city, state)
VALUES
    (1,	'Henrique',	        'Av Brasil',	    'Rio de Janeiro',	'RJ'),	
    (2,	'Marcelo Augusto',	'Rua Imigrantes',	'Belo Horizonte',	'MG'),
    (3,	'Caroline Silva',	'Av São Paulo',	    'Salvador',	        'BA'),
    (4,	'Guilerme Staff',   'Rua Central',	    'Porto Alegre',	    'RS'),	
    (5,	'Isabela Moraes',	'Av Juiz Grande',	'Curitiba',	        'PR'),	
    (6,	'Francisco Accerr',	'Av Paulista',	    'São Paulo',	    'SP'); 	    	 

3.

SELECT DISTINCT city FROM providers order by city asc;
