[checkmark]: https://raw.githubusercontent.com/mozgbrasil/mozgbrasil.github.io/master/assets/images/logos/logo_32_32.png "MOZG"
![valid XHTML][checkmark]

[getcomposer]: https://getcomposer.org/
[uninstall-mods]: https://getcomposer.org/doc/03-cli.md#remove

# PHP\Laravel\Murphy

## Sinopse

Automações usando [Laravel](https://laravel.com/)

## Motivação

Evangelizar o framework [Laravel](https://laravel.com/)

## Característica técnica

Para o aplicativo o Heroku usa o arquvo [app.json](https://devcenter.heroku.com/articles/app-json-schema)

Para a implantação o Heroku usa o arquvo [composer.json](composer.json)

Como a Heroku trabalha com o [Composer](https://getcomposer.org/), todas as dependências a ser usada no projeto está registrada no arquivo [composer.json](composer.json)

## Descrição

++

## Implantando na Heroku

Clique abaixo para implantar o aplicativo na sua conta na [Heroku](https://www.heroku.com/)

Com o conceito de [PaaS "Platform as a Service"](https://pt.wikipedia.org/wiki/Plataforma_como_servi%C3%A7o), no uso do [Heroku](https://www.heroku.com/) você tem ZERO preocupação sobre o ambiente, servidor, configurações, etc. Simplesmente você sobe a aplicação e está tudo rodando.

[![Deploy to Heroku](https://www.herokucdn.com/deploy/button.svg)](https://heroku.com/deploy?template=https://github.com/mozgbrasil/heroku-laravel)

Em seguida clique no botão "Deploy"

Ao finalizar a implantação do aplicativo será exibido a mensagem "Your app was successfully deployed."

Clique no botão "View"

Será carregado o aplicativo

Em seguida você pode fazer um fork desse repositório e fazer as alterações necessárias, certifique de apontar o seu repositório na Heroku e habilitar a implantação automatica.

## Executando Localmente

Certifique-se de utilizar um ambiente com os requerimentos recomendados como descrito na documentação [Laravel Docs](https://laravel.com/docs/5.7)

```
git clone git@github.com:mozgbrasil/laravel-murphy.git
```

## Criando link symbolico local para uso no Devilbox

```
cd ~/dados/mount/www/localhost/htdocs

ln -s /home/marcio/dados/git/projects/laravel-murphy
```

## Executando no Devilbox

```
cd ~/dados/dockers/devilbox

./shell.sh

cd localhost/htdocs/laravel-murphy

php -v

laravel --version

php artisan

```

Deve ser usado qualquer um dos comandos a seguir para a criação de uma nova aplicação

Dessa forma deve ser feito o clone do repositório https://github.com/laravel/laravel

```
laravel new app-murphy

    ou

composer create-project --prefer-dist laravel/laravel app-murphy
```

x

```

cd app-murphy

php artisan make:auth

## FIX: Specified key was too long
## https://laravel-news.com/laravel-5-4-key-too-long-error

php artisan key:generate

php artisan migrate

npm install

npm run dev

```

## Sobre o aplicativo para o Heroku

Esse aplicativo foi desenvolvido pela [MOZG](http://mozg.com.br/) e se encontra disponível no seguinte repositório no github [https://github.com/mozgbrasil/heroku-laravel](https://github.com/mozgbrasil/heroku-laravel), qualquer contribuição é bem vinda.

# Considerações

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

## Especificações técnicas

* [PHP-FPM](http://php-fpm.org/)
* [Nginx](https://www.nginx.com/)
* [PHP](http://php.net)
* [Laravel 5](http://laravel.com/docs)
* [Heroku](https://www.heroku.com/)
* [Foundation 5](http://foundation.zurb.com/)
* [SASS](http://sass-lang.com/)
* [React](https://facebook.github.io/react/)
* [Node.js](https://nodejs.org/)
* [Grunt](http://gruntjs.com/)
* [Bower](http://bower.io/)
* [Babel](https://babeljs.io/)
* [WebPack](http://webpack.github.io/)
* [PurifyCSS](https://github.com/purifycss/purifycss)

:cat2:
