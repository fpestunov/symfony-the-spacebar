# Symfony 4

## 1. Let's Launch!

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

## 2. Our Micro-App & PhpStorm Setup

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

## 3. First Route & Controller

Two way creating routes.

### First. File routes.yaml

- `config/routes.yaml` its store routes
- `src/Controller/ArticleController.php` add first controller

There's just one rule: a controller must return a Symfony Response object.

Let's try the page!

### Second. Annotation Routes

What exactly are annotations? They're PHP comments that are read as configuration.
The route is defined right above the controller, everything is in one place. It works!

Install:
```
composer require annotations
```

Comment routes in `config/routes.yaml`.

### Fancy Wildcard Routes

> "Slug", it's a URL version of the title.


## 4. Symfony Flex & Aliases

### Installing the Security Checker

```
composer require sec-checker --dev
```

### Hello Symfony Flex

https://flex.symfony.com/

- The first superpower is the alias system
- Flex Recipes

Was added file is `config/packages/dev/security_checker.yaml` it means that we have new console command.

```
php bin/console security:check
```

**By the way, the purpose of the security checker is that it checks to see if there are any known vulnerabilities for packages used in our project.**

```
git diff composer.json
```

Thanks to that, whenever we run `composer install` when it finishes, it runs the security checker automatically. So cool!

## 5. The Twig Recipe

Really, most of learning Symfony involves learning to install and use a bunch of powerful, but optional, tools that make this work easier. If your app needs to return HTML, then one of these great tools is called Twig.

### Installing Twig

```
composer require twig
git status
```

- The first change is `config/bundles.php`. Bundles are the "plugin" system for Symfony. And whenever we install a third-party bundle, Flex adds it here so that it's used automatically.
- The recipe also created some stuff, like a templates/ directory! Yep, no need to guess where templates go: it's pretty obvious!
- Twig also needs some configuration, so the recipe added it in `config/packages/twig.yaml`.

## 6. Tune Up Twig ❤️

Lets extend `ArticleController` and add `$this->render()`. Create `templates/article/show.html.twig`.

### Twig Basics

Syntaxes:
1. `{{ }}` "say something" tag, because it prints. And just like PHP, you can print anything: a variable, a string or a complex expression.
2. `{% %}` "do something" tag. It's used whenever you need to, um, do something, instead of printing, like an if statement or for loop.
3. `{# #}` comment tag.

Additional links:
- https://twig.symfony.com/
- https://knpuniversity.com/screencast/twig 
