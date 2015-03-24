# Meetup-CakePHP-Amiens-B2B
Demo Project -  CakePHP - Meetup Amiens

This is a simple Application, built with CakePHP, Bake and Migrations

##Step 1 : Install CakePHP

- php composer.phar create-project --prefer-dist cakephp/app [app_name]

##Step 2 : Create the first table with Migrations

- bin/cake bake migration CreateBeers name:string image_url:string qte:integer created:datetime modified:datetime

- bin/cake Migrations migrate

##Step 3 : Create the CRUD for the table Beers

- bin/cake bake all beers

- check at localhost/[app_name]/beers

##Step 4: Add more tables

- bin/cake bake migration CreateTypes names:string
- bin/cake bake migration AddTypeToBeers type_id:integer  

- bin/cake bake migration CreateFormats names:string
- bin/cake bake migration AddFormatToBeers format_id:integer  

- bin/cake Migrations migrate

##Step 5 : Re-bake all

- bin/cake bake all types
- bin/cake bake all formats
- bin/cake bake all beers (twice ...)

- check at localhost/[app_name]/beers

##Step 6 : Personalize your application

- updates in templates
- Save image in base64 (/!\ Warning - Do not do this at home - It's dangerous, we are professional stunt  ... /!\)

##Step 7 : CodeSniffer

- php composer.phar require --dev "cakephp/cakephp-codesniffer=2.*"
- vendor/bin/phpcs --config-set installed_paths vendor/cakephp/cakephp-codesniffer
- vendor/bin/phpcs --standard=CakePHP /src

