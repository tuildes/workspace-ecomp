# MYSQL

sudo mysql -u root -p

> CREATE DATABASE nome_database;
> USE nome_database;
> DROP nome_database;
> exit;

---

# CRIAR MODEL

php artisan make:Model Models/nome_model -all (todas as flags - retirar para o normal)

$fillable -> normais
$hidden -> nao sao retornados no json, como senhas

# Migration

colocar o model na tabela

php artisan make:Migration create_nome_model_table

# Controller

php artisan make:controller API/nome_modelController -–api

Responsável por manipular o model para atender requisitos validos
Nossos controllers terão geralmente as funções store(), index(), show(),
update() e destroy().

● all(): retorna todos os registros de uma tabela
● find(): retorna um registro específico a partir de um ID
● where(): adiciona uma cláusula where à consulta
● first(): retorna o primeiro registro encontrado
● get(): retorna todos os resultados da consulta
● create(): cria um novo registro na tabela
● update(): atualiza um registro existente na tabela
● delete(): remove um registro da tabela
● save():salva

index - retorna tudo
show - retorna um ou nada
store - cria
update - atualiza algo criado
destroy - deleta

# Requests ou Validator

php artisan make:request nome_modelRequest

Authorize - permissao para fazer
rules

# Rotas

Fazendo que nossos controllers tem funções específicas para cada tipo de
ação que eles vão efetuar é importante saber que existem diferentes rotas com
diferentes funções/permissões, essas são as que usamos na Ecomp:
● POST: Usado quando o request planeja criar algo novo. (store)
● GET: Apenas buscam informação. (index e show)
● PUT: Modifica uma informação já existente. (update)
● DELETE: Apagam informações existentes. (destroy)

https://laravel.com

# Gerar back-end

php artisan key:generate
php artisan migrate
php artisan migrate:fresh // zerar
php artisan migrate
php artisan route:list
