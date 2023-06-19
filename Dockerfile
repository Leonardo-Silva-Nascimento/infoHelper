FROM php:7.4-cli
# Instala as dependências e extensões necessárias
RUN apt-get update \
    && apt-get install -y \
        libpq-dev \
    && docker-php-ext-install \
        pdo \
        pdo_mysql
RUN docker-php-ext-install pdo pdo_mysql
WORKDIR /var/www/html
EXPOSE 8000
CMD php artisan serve --host=0.0.0.0 --port=8000