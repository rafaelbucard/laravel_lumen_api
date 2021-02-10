# Laravel/Lumen API REST Com (JSON Web Tokens)

Api de para cadastro de Estabelecimentos e Clientes


## Endpoint group:

GET api/v2/estabelecimentos : Retorna todos os estabecimentos cadastrado.

GET api/v2/estabelecimentos/{id} : Retorna estabelecimento segundo o id , caso id informado invalido status(204).

POST api/v2/estabelecimentos{"nome":"Nome Estabelecimento} : Recebe parametros e retorna objeto e status (201 cadastrado e dados do estabelecimento).

PUT api/v2/estabelecimentos/{id}{"nome":"Nome Estabelecimento} : Recebe parametros a atualiza dados retornando objeto e status(200 ok), caso id informado invalido status(404)..


 
