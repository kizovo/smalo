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
2. Rename .env.example to .env
3. $ docker-compose up -d --build
```

## Usage

```
1. Enter API shell: $ docker-compose exec api sh
2. Enter Web shell: $ docker-compose exec web sh
3. Cleanup containers: $ docker-compose down -v --rmi all --remove-orphans

Project spesific usage:
-----------------------
  smalo <command> [options] [arguments]

Available commands:
  artisan ................................... Run an Artisan command
  build [image] ............................. Build all of the images or the specified one
  composer .................................. Run a Composer command
  destroy ................................... Remove the entire Docker environment
  down [-v] ................................. Stop and destroy all containers
      Options:
      -v .................... Destroy the volumes as well
  init ...................................... Initialise the Docker environment and the application
  logs [container] .......................... Display and tail the logs of all containers or the specified one's
  repositories............................... Pull from repositories
  restart ................................... Restart the containers
  start ..................................... Start the containers
  stop ...................................... Stop the containers
  update .................................... Update the Docker environment
  yarn ...................................... Run a Yarn command
```