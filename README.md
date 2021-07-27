##Template Laravel auth
##### Laravel ui/auth

```
$ composer require laravel/ui --dev
$ php artisan ui:auth
```
####Utilizando como base o CSS do MateriliazeCSS

O __*Laravel*__ na versão 8 já vem configurado com seus css padrão o __Tailwind CSS__, mas tambem é possivel alterar este padrão, com o seu antecessor, muito conhecido e muito utilizado entre os desenvoledores o famoso __Boostrap__.

__Motivação:__ o framework css da  materializecss além de um visual bacana, deixa o site todo diferenciado com suas funcionabilidades de animações visuais.

Para instalação serão necessários atender alguns dos requisitos mínimos:
* Composer 2.0
* PHP >=7.4.11
* Saber utilizar o terminal

Seguindo as instruções passso-a-passo abaixo iniciará o app:

* Clonar este repositório:
~~~shell
$ git clone https://github.com/jlelis/app-template-laravel-materializecss.git
~~~~
* Copiar o arquivo .env.example para __.env__  configurado conforme seu ambiente 
~~~shell
$ cp .env.example .env
~~~
* (sugestão) para o simples teste, altere o __DB_CONNECTION__ para o sqlite no aquivo .ENV, por padrão é o mysql, troque o mysql para __*sqlite*__:
<img src="https://i.imgur.com/oBkylKL.png" width="200" height="200" />

* Para criar o banco em memória sqlite:
~~~shell
$ touch database/database.sqlite
~~~
* Instalação das dependêcias Laravel
~~~shell
$ composer install
~~~ 
* Criação da chave( key)
~~~shell
$ php artisan key:generate
~~~ 
* Rodar o migrate (criação das tabelas no banco)
~~~shell
$ php artisan migrate
~~~ 
* Executar o servidor php embutido do Laravel
~~~shell
$ php artisan serve
~~~
* Acessar o navegador
~~~shell
http://127.0.0.1:8000
~~~
######Caso as config. estejam corretas, irá aparacer no navegador como as imagens abaixo:

imagem 01 - Tela de Registro:
![imagem tela register](https://i.imgur.com/j8bnreJ.png)

imagem 02 - Tela de Login:
![imagem tela login](https://i.imgur.com/NzhEkhx.png)

Fonte(s): [Materializecss 1.0.0](https://materializecss.com/)

License: MIT
