# Smalo

Smalo is a bare minimum skeleton for rapid web project starter. It uses common LEMP stack with microservices architecture using docker.
Services:
- Nginx 1.21
- mySQL 8.0.25
- Laravel 8.48.1 (as API)
- Nuxt 2.15.3 (as Frontend)
- Phpmyadmin 5.1.1 / Adminer 4.8.1
- Redis 6.2.4

## Installation

**<ins>A. New & Clean Environment: (Recommended OS: Linux, OSX, Windows(WSL))</ins>**

```
1. Install [docker desktop](https://www.docker.com/products/docker-desktop)
2. Clone project
3. Go to project folder: $ cd smalo
3. Rename .env.example to .env

4. Resolve project CLI:
    a. Add following function at .bashrc or .zshrc, i.e .zshrc
       function smalo {
          cd /PATH/TO/YOUR/PROJECT && bash smalo $*
          cd -
       }
       *note: change /PATH/TO/YOUR/PROJECT, use 'pwd' in project root folder 
    b. Apply changes: $ source .zshrc

5. Init project by run: $ smalo init 

6. Add to hosts file:
   a. Linux: $ sudo vi /etc/hosts
   b. Windows: $ cd c:\windows\system32\drivers\etc\hosts
   below line:
   127.0.0.1       api.smalo.test web.smalo.test adminer.smalo.test

7. Open browser:
   https://api.smalo.test/
   https://web.smalo.test/
   https://adminer.smalo.test/

*note: 
1. if error storage/logs access denied run under api folder: $ chmod 777 -R storage bootstrap/cache
2. if found error: "...An attempt was made to access a socket in a way forbidden by its access permissions...", Pls follow this step 
   (Known bug with Hyper-V windows WSL):
    a. First, check, if your required port is reserved:
    $ netsh interface ipv4 show excludedportrange protocol=tcp

    b. If it your port is in one of the ranges, stop winnat:
    $ $net stop winnat

    c. Prohibit dynamic reservation for your required port (here for example, 50051, as stated in the original question):
    $ netsh int ipv4 add excludedportrange protocol=tcp startport=50051 numberofports=1

    d. Restart winnat:
    $ net start winnat

*usage:
1. Enter API shell: $ docker-compose exec api sh
2. Enter Web shell: $ docker-compose exec web sh
```

**<ins>B. First Project Creation Only:</ins>**

Prepare API (Laravel):
```
1. $ docker-compose run --rm api composer create-project --prefer-dist laravel/laravel tmp "8.*"
2. $ docker-compose run --rm api sh -c "mv -n tmp/.* ./ && mv tmp/* ./ && rm -Rf tmp"
```
Prepare Web (Nuxt):
```
1. $ docker-compose run --rm web sh -c "yarn global add nuxt && yarn create nuxt-app tmp"
2. $ docker-compose run --rm web sh -c "mv -n tmp/.* ./ && mv tmp/* ./ && rm -Rf tmp"
```
Useful Docker Commands:
```
1. Build up docker space: $ docker-compose up -d --build
2. Clean up docker space: $ docker system prune --all --volumes --force
3. Cleanup containers: $ docker-compose down -v --rmi all --remove-orphans
```

```
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

4. Resource about this architecture (https://tech.osteel.me/posts/docker-for-local-web-development-introduction-why-should-you-care)[https://tech.osteel.me/posts/docker-for-local-web-development-introduction-why-should-you-care]
