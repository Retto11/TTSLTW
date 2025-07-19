FROM richarvey/nginx-php-fpm:latest

COPY . /var/www/html

WORKDIR /var/www/html

RUN composer install --no-dev --optimize-autoloader

RUN php artisan config:cache && php artisan route:cache

CMD ["/start.sh"]
