FROM php:7.0-fpm

RUN apt-get update -y && \
    apt-get install -y \
    libmcrypt-dev \
    git \
    zlib1g-dev

RUN docker-php-ext-install mbstring
RUN docker-php-ext-install mcrypt
RUN docker-php-ext-install pcntl
RUN docker-php-ext-install zip
RUN docker-php-ext-install bcmath
RUN docker-php-ext-install pdo pdo_mysql
# Install composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/bin/
RUN mv /usr/bin/composer.phar /usr/bin/composer

RUN mkdir -p /data/
WORKDIR /data/
