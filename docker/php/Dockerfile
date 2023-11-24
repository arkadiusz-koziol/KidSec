FROM php:8.2.0-fpm AS ahe-projekt-php

RUN apt-get update && \
apt-get -y upgrade && \
apt-get install -y aptitude && \
apt-get install -y build-essential software-properties-common byobu curl ca-certificates git htop man unzip vim wget libcurl4 libcurl4-gnutls-dev libpcre3 libpcre3-dev libxml2 libxml2-dev liblua5.3-0 liblua5.3-0-dbg liblua5.3-dev \
libxml2-dev libxslt-dev libgd-dev libiconv-hook-dev libicu-dev libonig-dev zlib1g-dev libzip-dev \
libbz2-dev openssl libssl-dev libfreetype6-dev libjpeg62-turbo-dev libpng-dev libmemcached-dev libmemcached11

# Use the default production configuration
#RUN mv "$PHP_INI_DIR/php.ini-development" "$PHP_INI_DIR/php.ini"
#
RUN update-ca-certificates && \
docker-php-ext-install bcmath ctype curl dom fileinfo && \
docker-php-ext-configure gd --with-freetype --with-jpeg --with-xpm --enable-gd-jis-conv && \
docker-php-ext-install -j$(nproc) gd && \
docker-php-ext-install iconv && \
docker-php-ext-configure intl && \
docker-php-ext-install intl && \
docker-php-ext-install mbstring pdo pdo_mysql xml simplexml xsl soap zip sockets

RUN pecl install xdebug-3.2.2 && \
docker-php-ext-enable xdebug

RUN php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');" && \
php composer-setup.php --install-dir=/usr/local/bin --filename=composer
