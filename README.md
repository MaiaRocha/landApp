<h1 align="center"> API LandApp </h1>

<img src="https://go.thelandapp.com/assets/layout/logo_white.png" alt="api_land_app">

# Padrão de projeto utilizado

### - Padrão API RESTFULL

### - Authenticação JWT

### - Migrations e Seeders

### - Form Request Validator



## 🚀 Versão das tecnologias

Este projeto foi desenvolvido com as seguintes versões:


- PHP: ^7.3

- Laravel: ^8.0



## ⚙ Passo a passo para rodar o projeto

1- Clonar o projeto:
> git clone https://github.com/RomariaRocha/landApp

2- Criar o .env com base no example:
> copy .env

3- Instalar as dependencias via composer:
> composer install

4- Gerar a key:
> php artisan key:generate

5- Gerar a key JWT:
> php artisan jwt:secret

6- Criar o DB:
> Criar DB com o nome "land_app"

7- Rodar as migrations:
> php artisan migrate

8- Rodar a Seeder:
> php artisan db:seed

9- Para iniciar a aplicação:
> php artisan serve


## Dados de acesso para o endpoint de Login

> {
>    "password": "",
>    "email": ""
>  }

<br>
<br>
Feito com 💜 por Romaria Oliveira 👋 [Veja meu Linkedin](https://www.linkedin.com/in/romariadev/)
<br>

