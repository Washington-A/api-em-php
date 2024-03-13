<h1>
    CRUD-PHP-API-DOCKER
</h1>

![image](https://github.com/Washington-A/api-em-php/assets/161977020/7173e176-7d3e-4c87-83ae-84ce42a38169)


> Status: Finalizado ✅

### Este é um projeto desenvolvido em PHP7.2, para demonstrar a implementação de um CRUD (Create, Read, Update, Delete) de usuários em uma API utilizando Docker.

- [Requisitos](#requisitos)
- [Configurando a API](#configurando-a-api)
- [Testando a API](#testando-a-api)
- [LINKS ÚTEIS:](#links-úteis)



## Requisitos:

+ Docker instalado e configurado (⚠️Necessário WSL 2.0, ver documentação abaixo)
+ Editor de código 

+ Acesse: https://www.docker.com/products/docker-desktop/, para donwload do Docker Desktop

## Configurando a API:

+ Clone o repositório 

```
git clone https://github.com/Washington-A/api-em-php.git
```
+ Abra o Docker Desktop
+ Em um editor de código, acesse o diretório onde o projeto foi salvo

## Criar e levantar os containers
```
docker-compose up -d
```
## Iniciar o container Docker

```
docker-compose start
```
## Parar o container Docker
```
docker-compose stop
```

#### Insira seus projetos na pasta www.

## Acesso Localhost

Para acessar a aplicação, abra o seguinte URL em seu navegador:

http://localhost:4500/api


## Acesso ao phpMyAdmin

Para gerenciar o banco de dados, você pode usar o phpMyAdmin. Acesse o seguinte URL em seu navegador:

http://localhost:8080


**Faça login com as seguintes credenciais:**

- **Usuário**: root
- **Senha**: root**

# Testando a API:

+ GET /users: Retorna a lista completa de usuários.
+ GET /users/{id}: Retorna os detalhes do usuário com o ID especificado.
+ POST /users: Adiciona um novo usuário à lista.
+ PUT /users/{id}: Atualiza os dados do usuário com o ID especificado.
+ DELETE /users/{id}: Remove o usuário com o ID especificado.


### Os testes foram feitos utilizando o POSTMAN

# GET:

```
http://localhost:4500/api/users/
```



https://github.com/Washington-A/api-em-php/assets/161977020/4e8028b9-2c16-49c2-bca4-ef2c5addd139

# GET com ID

```
http://localhost:4500/api/users/{id}
```

https://github.com/Washington-A/api-em-php/assets/161977020/e16835b1-c889-4f5e-b428-669421738185


# POST:
```
http://localhost:4500/api/users/
```
```

{
    "nome": "substitua pelo nome"
}

```


https://github.com/Washington-A/api-em-php/assets/161977020/0052c517-a903-410f-b2af-4f79a492dba1

# PUT:

```
http://localhost:4500/api/users/{id}
```
```

{
    "nome": "substitua pelo nome"
}

```

https://github.com/Washington-A/api-em-php/assets/161977020/a78512d8-08f1-462c-b8b4-b27582874b97

# DELETE:

```
http://localhost:4500/api/users/{id}
```



https://github.com/Washington-A/api-em-php/assets/161977020/48527d62-59ee-4569-8abb-643654467753




### LINKS ÚTEIS:
+ Documentação do Docker: https://docs.docker.com/
+ Documentação WSL https://learn.microsoft.com/pt-br/windows/wsl/

