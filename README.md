# [ead-son-php71-novidades](https://www.schoolofnet.com/curso/php/linguagem-php/novidades-do-php71)
## setup docker
- ``docker-compose up -d`` inicia o servidor (localhost:8001)
- ``docker container ls`` lista containers ativos
- ``docker-compose down`` encerra todos containeirs.

### Reonfigurando dockerfile (não é necessário!)
- Não é o caso, mas se fosse utilizado o `Dockerfile` e ele fosse modificiado deveria ser rodado ``docker-compose build`` para não usar o cache ([referência](https://docs.docker.com/compose/reference/build/))
> Nesse projeto a imagem [está sendo baixada](https://gitlab.com/nenitf/ead_php_school-of-net_php71-novidades/-/blob/master/docker-compose.yml#L18), caso a ideia fosse usar o `Dockerfile` o `docker-compose.yml` deveria conter a instrução `build: .` ao invés de `image: php:7.1-apache`

## OBS
Esse repo faz parte do Plano de estudos [PHP Intermediário](https://www.schoolofnet.com/plano-de-estudo-php-developer-intermediario/) da SON
