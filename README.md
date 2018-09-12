[checkmark]: https://raw.githubusercontent.com/mozgbrasil/mozgbrasil.github.io/master/assets/images/logos/logo_32_32.png "MOZG"
![valid XHTML][checkmark]

[getcomposer]: https://getcomposer.org/
[uninstall-mods]: https://getcomposer.org/doc/03-cli.md#remove

# PHP\Laravel\Murphy

## Sinopse

Automações usando [Laravel 5.7](https://laravel.com/)

A seguir alguns controles

```
http://heroku-laravel-mozg.herokuapp.com/

http://heroku-laravel-mozg.herokuapp.com/admin/

    admin / admin

http://heroku-laravel-mozg.herokuapp.com/redis-manager/

http://heroku-laravel-mozg.herokuapp.com/redis-manager/api/scan?pattern=*&conn=default

http://heroku-laravel-mozg.herokuapp.com/scaffold/

```

## Motivação

Evangelizar o uso do Framework [Laravel](https://laravel.com/)

## Característica técnica

Para o aplicativo o Heroku usa o arquvo [app.json](https://devcenter.heroku.com/articles/app-json-schema)

Para a implantação o Heroku usa o arquvo [composer.json](composer.json)

Como a Heroku trabalha com o [Composer](https://getcomposer.org/), todas as dependências a ser usada no projeto está registrada no arquivo [composer.json](composer.json)

## Implantando na Heroku

Com o conceito de [PaaS "Platform as a Service"](https://pt.wikipedia.org/wiki/Plataforma_como_servi%C3%A7o), no uso do [Heroku](https://www.heroku.com/) você tem ZERO preocupação sobre o ambiente, servidor, configurações, etc. Simplesmente você sobe a aplicação e está tudo rodando.

Clique abaixo para implantar o aplicativo na sua conta na [Heroku](https://www.heroku.com/)

[![Deploy to Heroku](https://www.herokucdn.com/deploy/button.svg)](https://heroku.com/deploy?template=https://github.com/mozgbrasil/heroku-laravel)

Em seguida clique no botão "Deploy"

Ao finalizar a implantação do aplicativo será exibido a mensagem "Your app was successfully deployed."

Clique no botão "View"

Será carregado o aplicativo

Em seguida você pode fazer um fork desse repositório e fazer as alterações necessárias, certifique de apontar o seu repositório na Heroku e habilitar a implantação automatica.

## Executando Localmente

Certifique-se de utilizar um ambiente com os requerimentos recomendados como descrito na documentação [Laravel Docs](https://laravel.com/docs/5.7)

## Criando link symbolico local para uso no Devilbox

```
cd ~/dados/mount/www/localhost/htdocs

ln -s /home/marcio/dados/git/projects/heroku-laravel
```

## Executando no Devilbox

```
cd ~/dados/dockers/devilbox

./shell.sh

cd localhost/htdocs/heroku-laravel

php -v

laravel --version

php artisan

```

Deve ser usado qualquer um dos comandos a seguir para a criação de uma nova aplicação

Dessa forma deve ser feito o clone do repositório https://github.com/laravel/laravel

```
laravel new heroku-laravel

    ou

composer create-project --prefer-dist laravel/laravel heroku-laravel
```

Possibilidades de implementação ao projeto

```

cd heroku-laravel

# Database -> DROP | CREATE

mysqladmin -h 'mysql' -u root -p CREATE "heroku-laravel"

mysql -h 'mysql' -u 'root' -p 'heroku-laravel' -e "\
   SHOW TABLES; \
"

## Update Database Enviroment

nano .env

## artisan make

php artisan make:auth

## FIX: Specified key was too long
## https://laravel-news.com/laravel-5-4-key-too-long-error

## artisan migrate

php artisan migrate

```

## Library

```


### Install

composer require laravel/socialite

###  Configure

https://laravel.com/docs/5.7/socialite#configuration

```

```

### Install

composer require beyondcode/laravel-self-diagnosis

### Usage

php artisan self-diagnosis

```

```

### Install

composer require beyondcode/laravel-view-xray --dev

### If you are using Laravel 5.5+, the package will automatically register the service provider for you.
### By default, the package will automatically detect all models in your app directory that extend the Eloquent Model class. If you would like you explicitly define where your models are located, you can publish the configuration file using the following command.

### Publish assets and config

php artisan vendor:publish --provider=BeyondCode\\ViewXray\\ViewXrayServiceProvider

```

```

### Install

composer require barryvdh/laravel-debugbar --dev

### Publish assets and config

php artisan vendor:publish --provider="Barryvdh\Debugbar\ServiceProvider"

```

```

### Install

composer require encore/laravel-admin

### Publish assets and config

php artisan vendor:publish --provider="Encore\Admin\AdminServiceProvider"

### Finish install

php artisan admin:install

```

```

### Install

composer require beyondcode/laravel-inline-translation --dev

```

```

### Install

composer require encore/redis-manager

### Publish assets and config

php artisan vendor:publish --provider="Encore\RedisManager\RedisManagerServiceProvider"

```

```

### Install

composer require amranidev/scaffold-interface

### Publish assets and config

php artisan vendor:publish

### Run migrations:

php artisan migrate

### Authentication scaffolding:

php artisan make:auth

```

```

### Install

composer require gpressutto5/laravel-slack

### Publish assets and config

php artisan vendor:publish --provider="Pressutto\LaravelSlack\ServiceProvider"

```

```

## npm

npm install

npm run dev

```

A seguir testes unitarios

```

php artisan make:test ViewTest

```


## Sobre o aplicativo para o Heroku

Esse aplicativo foi desenvolvido por [Marcio dos Santos Amorim](http://mozg.com.br/) e se encontra disponível no seguinte repositório no github [https://github.com/mozgbrasil/heroku-laravel](https://github.com/mozgbrasil/heroku-laravel), qualquer contribuição é bem vinda.

## Perguntas mais frequentes "FAQ"

### Sugestões importante

## Considerações

Se você gostou deste projeto, considere dar um 🌟 ou doar.

- [![pagseguro](https://stc.pagseguro.uol.com.br/public/img/botoes/doacoes/164x37-doar-assina.gif)](https://pagseguro.uol.com.br/checkout/v2/donation.html?currency=BRL&receiverEmail=mozgbrasil@gmail.com)
- [![Star on GitHub](https://img.shields.io/github/stars/mozgbrasil/heroku-laravel.svg?style=social)](https://github.com/mozgbrasil/heroku-laravel/stargazers)
- [![Watch on GitHub](https://img.shields.io/github/watchers/mozgbrasil/heroku-laravel.svg?style=social)](https://github.com/mozgbrasil/heroku-laravel/watchers)

Verifique também minha [Conta GitHub](https://github.com/mozgbrasil), onde eu tenho outros artigos e aplicativos que você pode achar interessantes.

## Para contratar 👨💻

Se você quiser que eu o ajude, estou disponível para contratar.

Entre em contato com suporte@mozg.com.br

## Onde seguir

Você pode me seguir nas mídias sociais 🐙😇, nos seguintes locais:

- [GitHub](https://github.com/mozgbrasil)
- [Twitter](https://twitter.com/mozgbrasil)

## Mais sobre mim

Eu não só vivo no GitHub, eu tento fazer muitas coisas para não me aborrecer 🙃. Para saber mais sobre mim, você pode visitar os seguintes links:

- [Artigos](http://mozg.com.br/artigos/)

## Documentação

https://laravel.com/

https://laracasts.com/series/laravel-from-scratch-2017

https://github.com/chiraggude/awesome-laravel#awesome-laravel--

## Especificações técnicas

* [Heroku](https://www.heroku.com/)
* [Nginx](https://www.nginx.com/)
* [PHP-FPM](http://php-fpm.org/)
* [PHP](http://php.net)
* [Laravel](http://laravel.com/docs)
* [PostgreSQL](https://www.postgresql.org/)


* [laravel/laravel](https://github.com/laravel/laravel)
* [laravel/socialite](https://github.com/laravel/socialite)
* [beyondcode/laravel-self-diagnosis](https://github.com/beyondcode/laravel-self-diagnosis)
* [beyondcode/laravel-view-xray](https://github.com/beyondcode/laravel-view-xray)
* [barryvdh/laravel-debugbar](https://github.com/barryvdh/laravel-debugbar)
* [z-song/laravel-admin](https://github.com/z-song/laravel-admin)
* [z-song/redis-manager](https://github.com/z-song/redis-manager)
* [gpressutto5/laravel-slack](https://github.com/gpressutto5/laravel-slack)
* [amranidev/scaffold-interface](https://github.com/amranidev/scaffold-interface)



:cat2:
