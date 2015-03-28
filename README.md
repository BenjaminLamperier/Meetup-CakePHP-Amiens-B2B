# Meetup-CakePHP-Amiens-B2B
Demo Project -CakePHP - Meetup Amiens

Cachier des charges : 
 - Liste des bières
 - Administration des types
 - Administration des formats

Contrainte :
  - Vous avez 15 min !

##Step 1 : Installer CakePHP 3

- php composer.phar create-project --prefer-dist cakephp/app [app_name]

##Step 2 : Créer la table beers avec le plugin Migration

- bin/cake bake migration CreateBeers name:string image:text qte:integer created:datetime modified:datetime

- bin/cake Migrations migrate

##Step 3 : Créer le CRUD pour le table beers

- bin/cake bake all beers

- check at localhost/[app_name]/beers

##Step 4: Ajouter les tables types et formats (et les clés dans la table beers)

- bin/cake bake migration CreateTypes names:string
- bin/cake bake migration AddTypeToBeers type_id:integer  

- bin/cake bake migration CreateFormats names:string
- bin/cake bake migration AddFormatToBeers format_id:integer  

- bin/cake Migrations migrate

##Step 5 : Encore du bake ...

- bin/cake bake all types
- bin/cake bake all formats
- bin/cake bake all beers (twice ...)

- check at localhost/[app_name]/beers

##Step 6 : On personne quelques trucs

- quelques modifs dans les templates
- pas d'upload d'image (trop long dans le temps imparti) alors on ajoute les images en base64 (/!\ Warning - Do not do this at home - It's dangerous, we are professional stunt  ... /!\)

##Step 7 : Demo CodeSniffer

- php composer.phar require --dev "cakephp/cakephp-codesniffer=2.*"
- vendor/bin/phpcs --config-set installed_paths vendor/cakephp/cakephp-codesniffer
- vendor/bin/phpcs --standard=CakePHP /src

##Step 8 : One more thing

- Et si je veux une API c'est trop tard ? To late ... it's done !
