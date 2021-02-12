# Laravel/Lumen API REST Com (JSON Web Tokens)

Api de para cadastro de Estabelecimentos e Clientes


## Endpoint group:

GET api/v2/estabelecimentos : Retorna todos os estabecimentos cadastrado.

GET api/v2/estabelecimentos/{id} : Retorna estabelecimento segundo o id , caso id informado invalido status(204).

POST api/v2/estabelecimentos{"nome":"Nome Estabelecimento} : Recebe parametros e retorna objeto e status (201 cadastrado e dados do estabelecimento).

PUT api/v2/estabelecimentos/{id}{"nome":"Nome Estabelecimento} : Recebe parametros e atualiza dados retornando objeto e status(200 ok), caso id informado invalido status(404)

GET api/v2/estabelecimentos/{id do estabelecimento}/clientes : Retorna Clientes de um Estabelecimento, caso id informado invalido status(404)

POST **X-WWW-Form-Urlencoded** api/v2/estabelecimentos/{id do estabelecimento}/clientes : Cadastra  Clientes em informado um Estabelecimento, caso id informado invalido status(404)

GET por Page api/v2/estabelecimentospage?page={numero da pagina} : Retorna 10 itens por pagina.

GET por Page api/v2/clientespage?page={numero da pagina} : Retorna 10 itemnspor pagina.

PUT **X-WWW-Form-Urlencoded** api/v2/estabelecimentos/{id do estabelecimento}/clientes/{id do cliente} : Recebe parametros e atualiza dados de cliente especifico status(200 ok), caso estabelecimento  não tenha cliente com id informado invalido status(404)

 
