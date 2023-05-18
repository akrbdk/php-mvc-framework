# PHP MVC framework
Minimalistic custom framework created for educational purposes.

## The framework is not well tested on production. If you use it on production you use it on your own risk.

**Related core package**: https://github.com/akrbdk/php-mvc-framework-core

## Installation using docker

1. Clone the project
2. Create `.env` file from `.env.example` file and adjust database parameters (including schema name)
3. Navigate to the project root directory and run `docker-compose up -d web` 
4. Run `composer install`
5. Run migrations - `php migrations.php`
6. Open in browser http://localhost/
