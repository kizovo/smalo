# Smalo

Smalo is a bare minimum skeleton for rapid web project starter. It uses common LEMP stack with microservices architecture using docker.
Services:
- Nginx 1.21
- mySQL 8.0.25
- Laravel 8.48.1 (as API)
- Nuxt 2.15.3 (as Frontend)
- Phpmyadmin 5.1.1

## Installation

Install [docker desktop](https://www.docker.com/products/docker-desktop) first

```
1. Clone project
2. Rename .env.example to .env
3. $ docker-compose up -d --build

Prepare Laravel Installation as API:
1. $ docker-compose run --rm api composer create-project --prefer-dist laravel/laravel tmp "8.*"
2. $ docker-compose run --rm api sh -c "mv -n tmp/.* ./ && mv tmp/* ./ && rm -Rf tmp"

Prepare Nuxt Installation as Web:
1. $ docker-compose run --rm web sh -c "yarn global add nuxt && yarn create nuxt-app tmp"
2. $ docker-compose run --rm web sh -c "mv -n tmp/.* ./ && mv tmp/* ./ && rm -Rf tmp"
```

## Usage

```
1. Enter API shell: $ docker-compose exec api sh
2. Enter Web shell: $ docker-compose exec web sh
3. Cleanup containers: $ docker-compose down -v --rmi all --remove-orphans

Before use below command, add following function at .bashrc or .zshrc
1. $ sudo vi ~/.zshrc
2. function smalo {
    cd /PATH/TO/YOUR/PROJECT && bash smalo $*
      cd -
  }
  *note: change /PATH/TO/YOUR/PROJECT, use 'pwd' in project root folder

Project spesific usage:
-----------------------

  smalo <command> [options] [arguments]

Available commands:
  artisan ................................... Run an Artisan command
  build [image] ............................. Build all of the images or the specified one
  cert ...................................... Certificate management commands
      generate .............................. Generate a new certificate
      install ............................... Install the certificate
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
+ To install local cert SSL on windows, please refer to this link [https://www.thewindowsclub.com/manage-trusted-root-certificates-windows](https://www.thewindowsclub.com/manage-trusted-root-certificates-windows)
+ Manually install certificate at api endpoint:
  + $ docker-compose exec api sh
  + $ update-ca-certificates

## Guidelines

1. Git commit best practice:
  + [https://github.com/trein/dev-best-practices/wiki/Git-Commit-Best-Practic](https://github.com/trein/dev-best-practices/wiki/Git-Commit-Best-Practices)
  + [https://chris.beams.io/posts/git-commit/](https://chris.beams.io/posts/git-commit/)

2. PHP coding style guide:
  + Use PSR-12 Code Style, which includes PSR-1 and PSR-2 code styles
    + [https://www.php-fig.org/psr/psr-12/](https://www.php-fig.org/psr/psr-12/)
    + [https://www.php-fig.org/psr/psr-1/](https://www.php-fig.org/psr/psr-1/)
    + [https://www.php-fig.org/psr/psr-2/](https://www.php-fig.org/psr/psr-2/)
  + Use PSR-4 for both autoloading and namespacing
    + [https://www.php-fig.org/psr/psr-4/](https://www.php-fig.org/psr/psr-4/)

3. Use ESLint & Prettier