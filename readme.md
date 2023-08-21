## Aplicação
Esse site é desenvolvido em php com [Laravel](https://laravel.com/) e utilizando o [Blade](https://laravel.com/docs/10.x/blade) para a utilização no frontEnd e para aplicação subir, tem o uso do [Docker](https://www.docker.com/)

## Instalação
### Instrução do próprio framework para instalação

 1. `docker-compose exec php-fpm composer install`
 2. Permissão da pasta storage: 
	 3. `sudo chgrp -R www-data storage bootstrap/cache`
	 4. `sudo chmod -R ug+rwx storage bootstrap/cache`
 3. Limpeza recomendada
	 4. `docker-compose exec php-fpm php artisan view:clear`
	 5. `docker-compose exec php-fpm php artisan cache:clear`