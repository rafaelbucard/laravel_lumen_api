# Laravel/Lumen API REST  :bulb:

Api  para cadastro de Estabelecimentos e Clientes  utilizando autentificação com (JSON Web Tokens).

### Ferramentas:

Laravel/lumen: https://lumen.laravel.com/

JWT: https://jwt.io/

Testes API Postman: https://www.postman.com/

PHP: 8.0.0


## Mysql:

[Click Aqui para o Arquivo SQL](https://github.com/rafaelbucard/laravel_lumen_api/blob/main/lumen_fideliz%20(1).sql)

Usuário  teste já cadastrado no banco de dados!

## Endpoint Principais:

POST /api/v2/login [Efetuar Login]

GET /api/v2/estabelecimentos/{id} [Retornar informações do estabelecimento]

GET /api/v2/estabelecimentos/{id}/clientes [Retornar todos os clientes de um estabelecimento]

POST /api/v2/estabelecimentos/{id}/clientes [Cadastrar um cliente em um determinado estabelecimento]

GET /api/v2/estabelecimentos/{id}/clientes/{id_cliente} [Retornar um cliente específico do estabelecimento]

GET /api/v2/estabelecimentos/{id}/clientes/{id_cliente} [Retornar um cliente específico do estabelecimento]

PUT /api/v2/estabelecimentos/{id}/clientes/{id_cliente} [Atualizar um cliente específico do estabelecimento]

## Endpoint group:

POST /api/v2/login : recebe {"email": "EX@gmail.com" "password":"xyz"} retorna {token}

GET api/v2/estabelecimentos : Retorna todos os estabecimentos cadastrado.

GET api/v2/clientes : Retorna todos os clientes cadastrado.

GET api/v2/estabelecimentos/{id} : Retorna estabelecimento segundo o id , caso id informado invalido status(204).

GET api/v2/clientes/{id} : Retorna cliente segundo o id , caso id informado invalido status(204).

POST api/v2/estabelecimentos{"nome":"Nome Estabelecimento} : Recebe parametros e retorna objeto e status (201 cadastrado e dados do estabelecimento).

POST api/v2/clientes{"nome":"Nome Estabelecimento" "email":"email@cliente" "estabelecimento_id": int} : Recebe parametros e retorna objeto e status (201 cadastrado e dados do estabelecimento).

PUT api/v2/estabelecimentos/{id}{"nome":"Nome Estabelecimento} : Recebe parametros e atualiza dados retornando objeto e status(200 ok), caso id informado invalido status(404)

PUT api/v2/clientes/{id}{"nome":"Nome Estabelecimento" "email":"email@cliente" "estabelecimento_id": int} : Recebe parametros e atualiza dados retornando objeto e status(200 
ok), caso id informado invalido status(404)

GET api/v2/estabelecimentos/{id do estabelecimento}/clientes : Retorna Clientes de um Estabelecimento, caso id informado invalido status(404)

POST **X-WWW-Form-Urlencoded** api/v2/estabelecimentos/{id do estabelecimento}/clientes : Cadastra  Clientes em informado um Estabelecimento, caso id informado invalido status(404)

GET por Page api/v2/estabelecimentospage?page={numero da pagina} : Retorna 10 itens por pagina.

GET por Page api/v2/clientespage?page={numero da pagina} : Retorna 10 itemnspor pagina.

PUT **X-WWW-Form-Urlencoded** api/v2/estabelecimentos/{id do estabelecimento}/clientes/{id do cliente} : Recebe parametros e atualiza dados de cliente especifico status(200 ok), caso estabelecimento  não tenha cliente com id informado invalido status(404)

# Proximos passos :

Proximo passo é enviar URLs denavegação da Api seguindo o padrão HATEOAS, para a Contrução de uma API RESTfull

Feiro Com :hearts: por Rafael Buçard
