FROM php:8.1.6
RUN apt-get update -y && apt-get install -y npm
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer
RUN docker-php-ext-install pdo pdo_mysql sockets
WORKDIR /var/www/html
COPY . /var/www/html
RUN composer install && npm install   
CMD  php artisan migrate && php artisan serve --host=0.0.0.0 --port=8000
EXPOSE 8000