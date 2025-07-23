FROM node:18-bookworm-slim

# Cài PHP & các gói Laravel
RUN apt-get update && apt-get install -y \
    php php-cli php-mbstring php-xml php-bcmath php-curl php-pgsql php-zip unzip curl git composer

# Copy source code
COPY . /var/www/html
COPY .env .env
WORKDIR /var/www/html

# Cài Laravel & build frontend
RUN composer install --no-dev --optimize-autoloader
RUN npm install
RUN npm run build
RUN php artisan config:cache
RUN php artisan route:cache
RUN php artisan migrate --force
RUN chmod -R 775 storage bootstrap/cache

CMD php -S 0.0.0.0:$PORT -t public
EXPOSE 10000