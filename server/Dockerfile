FROM helixalpha/php:7.3.3 

LABEL maintainer="me@ryanhein.com"

ARG COMPOSER_CACHE_DIR

ENV APP_KEY base64:1UF0ffhAsuEgFNIIskJeqUaCj/qdxyB3EIo+JVTpnFY=
ENV APP_LOG errorlog

COPY --chown=www-data:www-data . /var/www/html/

RUN composer install --no-interaction --no-progress --no-suggest