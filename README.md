# Teste CAL-COMP - Parte 1

CRUDs para armazenamento com tabelas relacionadas

 > CRUD, Laravel 7

 ## Tabela de conteúdo

 -  [Pré-requisitos](#prerequisites)

 -  [Instalação](#installation)

 -  [Rodar ambiente de desenvolvimento](#rodar-ambiente-de-desenvolvimento)

 ---

 ## Prerequisites

 * [PHP](https://www.php.net/) >= 7.3 - General-purpose scripting language
 * [Composer](https://getcomposer.org/) >= 1.10.1 - A Dependency Manager for PHP 
 * [MySQL](https://www.mysql.com/) >= 5.6.47 - A RDBMS

 ---

 ## Installation

 ```shell
 $ mkdir ~/cal-comp.test/
 $ cd ~/cal-comp.test/
 $ git clone https://github.com/jean-bonilha/cal-comp.api.git
 $ cd cal-comp.api
 $ composer install
 $ cp .env.example .env
 $ php artisan key:generate
 $ php artisan migrate
 ```
 * Configure as variaveis de ambiente (arquivo .env) de acordo com seu banco de dados
 * Exemplo:
 ```shell
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=cal_comp
DB_USERNAME=cal_comp
DB_PASSWORD=secret
 ```
 ---

 ## Rodar ambiente de desenvolvimento

 Rodar Migrations junto com as Seeders

 ```shell
 $ php artisan db:seed
 ```
 ---

 ## Authors

 * **Jean Bonilha**

 ---
