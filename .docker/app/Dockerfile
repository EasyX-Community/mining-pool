FROM nginx:mainline-alpine

RUN apk add --no-cache openssl

RUN set -x \
    && addgroup -g 82 -S www-data \
    && adduser -u 82 -D -S -G www-data www-data

ENV DOCKERIZE_VERSION v0.6.1
RUN wget https://github.com/jwilder/dockerize/releases/download/$DOCKERIZE_VERSION/dockerize-alpine-linux-amd64-$DOCKERIZE_VERSION.tar.gz \
    && tar -C /usr/local/bin -xzvf dockerize-alpine-linux-amd64-$DOCKERIZE_VERSION.tar.gz \
    && rm dockerize-alpine-linux-amd64-$DOCKERIZE_VERSION.tar.gz

COPY ./.docker/app /tmp
COPY ./.docker/app/docker-entrypoint.sh /usr/local/bin/
COPY --chown=www-data:www-data server/public /var/www/html

ENTRYPOINT [ "docker-entrypoint.sh" ]