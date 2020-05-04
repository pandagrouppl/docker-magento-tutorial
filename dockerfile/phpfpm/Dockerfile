FROM php:7.3-fpm

RUN mv "$PHP_INI_DIR/php.ini-development" "$PHP_INI_DIR/php.ini"

#modules installation
RUN docker-php-ext-install mysqli
