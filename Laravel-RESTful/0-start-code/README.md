<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

## Docker setup
- docker run --rm -v ${PWD}:/app composer install
- docker-compose build --no-cache
- docker-compose up -d
- docker-compose exec app php artisan key:generate
- docker-compose exec app php artisan config:cache
- docker-compose exec app php artisan migrate:refresh --seed
