<h1>
    CRUD-PHP-API-DOCKER
</h1>

![image](https://github.com/Washington-A/api-em-php/assets/161977020/7173e176-7d3e-4c87-83ae-84ce42a38169)


> Status: Finalizado ✅

### Este é um projeto desenvolvido em PHP7.2, para demonstrar a implementação de um CRUD (Create, Read, Update, Delete) de usuários em uma API utilizando Docker.

- [Requisitos](#requisitos)
- [Testando a API](#testando-a-api)
- [Referências](#referências)
- [Licença](#licença)
- [Informações do Autor](#informações-do-autor)


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

```

http://localhost:4500/api/users/

```
VIDEO GET
```

http://localhost:4500/api/users/{id}

```
VIDEO GET COM ID
```

http://localhost:4500/api/users/

```
```

{
    "nome": "substitua pelo nome"
}

```
VIDEO POST





### LINKS ÚTEIS:
+ Documentação do Docker: https://docs.docker.com/
+ Documentação WSL https://learn.microsoft.com/pt-br/windows/wsl/

