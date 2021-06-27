# Smalo

Smalo is a bare minimum skeleton for rapid web project starter. It uses common LEMP stack with microservices architecture using docker.
Services:
- Nginx 1.21
- mySQL 8.0.25
- Laravel 8.48.1 (as API)
- Nuxt 2.15.3 (as Frontend)
- Phpmyadmin 5.1.1

## Installation

Install [docker desktop](https://www.docker.com/products/docker-desktop)

```
1. Clone project
2. $ docker-compose up -d --build
```

## Usage

```
1. Enter API shell: $ docker-compose exec api sh
2. Enter Web shell: $ docker-compose exec web sh
```