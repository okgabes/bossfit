<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

 


# BOSSFIT- ACADEMIA

Projeto BOSSFIT é um CRUD feito em laravel (v.8) a fim de reproduzir um cadastro de academia. esse projeto foi realizado para avaliação de meus superiores sobre o meu conhecimento no framework Laravel

Para instalar o projeto:
- Clone o projeto em seu diretório de execução
- É necessário a utilização de um servidor local (WAMP ou XAMPP)

> O projeto acompanha todas as pastas e arquivos, sendo não necessário novas instalação.

- É necessário a criação de um banco de dados chamado: 'bossfit’ do tipo 'utf8mb4 unicode ci'.

- Já com o banco de dados criado, vá ao diretório do projeto execute: php artisan migrate, devem ser criadas 7 tabelas

- Agora para iniciar o projeto use o comando: 'php artisan server'

- Vá ao navegador e digite: http://127.0.0.1:8000/

  > é necessario a execução do código abaixo devido a dependência de usuário com professor e modalidade.

- Execute esses scripts sql:

  

  INSERT INTO `modalidades` (`id`, `name`, `turno`, `created_at`, `updated_at`) VALUES ('1', 'Natação', 'Vespertino', '2021-10-14 15:56:17', '2021-10-14 15:56:17');

  

  INSERT INTO `professors` (`id`, `name`, `email`, `cpf`, `rua`, `bairro`, `cep`, `numero`, `cidade`, `estado`, `turno`, `cadastrante`, `created_at`, `updated_at`) VALUES ('1', 'Girafales Silva', 'girafales@google.com', '068.798.554-36', 'Rua das Flores', 'Jardim Florestal', '79584-325', '30', 'Campo Grande', 'MS', 'Vespertino', 'Tim Maia', '2021-10-14 15:56:17', '2021-10-14 15:56:17');



##### Documentação  



## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
