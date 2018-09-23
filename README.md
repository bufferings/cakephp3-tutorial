# CakePHP3 Tutorial

This is a repository for my CakePHP3 tutorial:

https://book.cakephp.org/3.0/ja/tutorials-and-examples.html

The base source codes are copied from:

https://github.com/bufferings/phpstorm-docker-cakephp

## How to run

```
# Prepare Docker
❯ docker-compose build

# Install packages
❯ docker-compose run --rm php-cli composer install

# Start
❯ docker-compose up

```

Then, you can access

* http://localhost:8000/articles
* http://localhost:8000/users
* etc...

You can use this user to login

* email: cakephp@example.com
* password: sekret
