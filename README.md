# PHP MVC framework
Minimalistic custom framework created for educational purposes.

## The framework is not well tested on production. If you use it on production you use it on your own risk.

**Related core package**: https://github.com/akrbdk/php-mvc-framework-core

## Installation using docker

1. Clone the project using git
2. Copy `.env.example` into `.env` (Don't need to change anything for local development)
3. Navigate to the project root directory and run `docker-compose up -d`
4. Install dependencies - `docker-compose exec app composer install`
5. Run migrations - `docker-compose exec app php migrations.php`
6. Open in browser http://127.0.0.1:8080



## Build image commands
```bash
docker build -t php-mvc ./docker
docker image ls
docker run -d --rm -p 8080:80 --name php-mvc -v "$PWD":/var/www/ php-mvc
docker ps

docker exec -it php-mvc bash 
composer install
OR
docker exec php-mvc composer install

docker stop php-mvc
```
