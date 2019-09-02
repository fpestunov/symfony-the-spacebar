# Symfony 4

## Let's Launch!

```
composer self-update
composer create-project symfony/skeleton the_spacebar
cd the_spacebar
php -S 127.0.0.1:8000 -t public // "public" is the document root of the project
```

Nginx or Apache for local development
http://bit.ly/symfony-web-servers.

Ignoring files
https://help.github.com/en/articles/ignoring-files

## Our Micro-App & PhpStorm Setup

Four directories we need to think about:
- `\public\index.php` - front controller
- `\src`
- `\config`
- `\vendor`

Its works because `Flex` technology.

```
composer require server // install better server
./bin/console server:run // run server
```

Console commands:
```
./bin/console
```

3 must have PhpStorm plugin:
- Symfony Plugin
- PHP Annotations
- PHP Toolbox

## First Route & Controller

- `config/routes.yaml` its store routes
- `src/Controller/ArticleController.php` add first controller

There's just one rule: a controller must return a Symfony Response object.

Let's try the page!

