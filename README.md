<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## Sobre o projeto

Trata-se de um projeto construido para demonstrar minhas habilidades com o laravel em um teste para uma vaga de emprego. E seus requisitos são:

- Autenticação (via Token usando JWT, Laravel Sanctum ou algo equivalente)
- Listagem de motoristas
- Cadastro de um motorista. Importante que tenha campos para dados do veículo
- Edição de dados de um motorista
- Exclusão de um motorista
- Deve ser possível também buscar um motorista pelo nome, documento ou pela placa do veículo
- A stack deve ser da seguinte forma:
    * Linguagem PHP
    * Desenvolver backend com algum framework abaixo:
    * Laravel (PHP)

- Utilizar algum banco de dados relacional, mysql, oracle, etc.
- As únicas rotas públicas da aplicação deverão ser a de login e cadastro
- Cada motorista só poderá ter um carro ativo cadastrado

## Instruções para rodar o projeto - SEM docker

1. Necessário instalar todas as dependências do projeto, para isso utilize: `composer install`
2. Necessário estruturar o banco de dados do projeto, para isso utilize: `php artisan migrate`
3. Agora é só iniciar o serviço, com `php artisan serve`
4. Opcional, em um terminar diferente, para visualizar as rotas disponíveis basta executar o comando `php artisan route:list`
5. Caso queira observar a documentação, basta acessar http://<Rota do serviço>`/docs` no navegador. Exemplo: `http://localhost/docs`
6. O sistema de Autenticação utilizado foi JWT, então para rotas que não são publicas, utilize `Authorization Bearer {TOKEN}`. Token esse que é gerado a partir do `login` do usuário.

## Instruções para rodar o projeto - COM Docker

1. Configurar o arquivo .env (deixarei um exempo no .env.example)
2. Instalar todas as dependências do projeto, para isso utilize: `docker-compose build`
3. Inicializar os containers: `docker-compose up -d`
4. Estruturar o banco de dados: crie a pasta `mysql` na raiz do projeto, caso não existir, e execute `docker-compose exec php /var/www/html/artisan migrate`
5. Opcional, em um terminar diferente, para visualizar as rotas disponíveis basta executar o comando `php artisan route:list` dentro do container laravel_php
6. Caso queira observar a documentação, basta acessar http://<Rota do serviço>`/docs` no navegador. Exemplo: `http://localhost:8081/docs`
7. O sistema de Autenticação utilizado foi JWT, então para rotas que não são publicas, utilize `Authorization Bearer {TOKEN}`. Token esse que é gerado a partir do `login` do usuário. E se for acessar como um motorista(DRIVER), então tem que passar o token pelo header com a chave TOKEN


## Agradecimento

É um projetinho bem simples, mas espero que gostem da estrutura. E se quiserem compartilhar algo ou dar um feedback, é muito impotante para mim irei apreciar com carinho seja ele positivo ou negativo.
Obrigado, até mais.
