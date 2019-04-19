FROM php:7.3.3-fpm-alpine

LABEL maintainer="me@ryanhein.com"

# System and PHP Dependencies

ENV MEMCACHED_DEPS zlib-dev libmemcached-dev cyrus-sasl-dev
RUN apk add --no-cache --update libmemcached-libs zlib
RUN set -xe \
  && apk add --no-cache --update --virtual .phpize-deps $PHPIZE_DEPS \
  && apk add --no-cache --update --virtual .memcached-deps $MEMCACHED_DEPS \
  && pecl install memcached \
  && echo "extension=memcached.so" > /usr/local/etc/php/conf.d/20_memcached.ini \
  && rm -rf /usr/share/php7 \
  && rm -rf /tmp/* \
  && apk del .memcached-deps .phpize-deps

RUN apk add --update --no-cache \
    libmemcached \
    libzip-dev \
    libjpeg-turbo-dev \
    libpng-dev \
    freetype-dev \
  && NPROC=$(getconf _NPROCESSORS_ONLN) \
  && docker-php-ext-install -j${NPROC} iconv pdo pdo_mysql opcache zip \
  && docker-php-ext-configure gd --with-freetype-dir=/usr/include/ --with-png-dir=/usr/include/ --with-jpeg-dir=/usr/include/ \
  && docker-php-ext-install -j${NPROC} gd

# Composer

ENV COMPOSER_ALLOW_SUPERUSER 1
ENV COMPOSER_VERSION_SHA1 cb19f2aa3aeaa2006c0cd69a7ef011eb31463067
RUN wget https://raw.githubusercontent.com/composer/getcomposer.org/$COMPOSER_VERSION_SHA1/web/installer -O - -q | php -- --quiet \
  && mv composer.phar /usr/local/bin/composer
