FROM alpine:3.9

MAINTAINER Ryan Hein <me@ryanhein.com>

ENV BUILD_DEPS \
 build-base \
 curl-dev \
 git \
 iniparser \
 gcc \
 musl-dev \
 alpine-sdk \ 
 boost-dev \
 zlib-dev

WORKDIR /var/stratum

RUN apk update \
 && apk add --no-cache ${BUILD_DEPS}

RUN apk add \
        gmp-dev \
        libstdc++ \
        mariadb-connector-c \
        libcurl \
        mariadb-dev \ 
        libssh2-dev

ADD . .

RUN make -C /var/stratum/iniparser \
 && make -C /var/stratum \
 && apk del ${BUILD_DEPS} \
 && rm -rf /var/cache/apk/*
 
RUN apk add --no-cache bash

ENV DOCKERIZE_VERSION v0.6.1
RUN wget https://github.com/jwilder/dockerize/releases/download/$DOCKERIZE_VERSION/dockerize-alpine-linux-amd64-$DOCKERIZE_VERSION.tar.gz \
    && tar -C /usr/local/bin -xzvf dockerize-alpine-linux-amd64-$DOCKERIZE_VERSION.tar.gz \
    && rm dockerize-alpine-linux-amd64-$DOCKERIZE_VERSION.tar.gz

COPY docker-entrypoint.sh /usr/local/bin/
ENTRYPOINT [ "docker-entrypoint.sh" ]

VOLUME [ "/var/stratum/config" ]

EXPOSE 3333 3339 3334 3433 3555 3556 3573 3535 3533 \
       3553 3633 3733 3636 3737 3739 3747 3833 3933 \ 
       4033 4133 4233 4234 4333 4433 4533 4553 4633 \ 
       4733 4833 4933 5033 5133 5233 5333 5433 5533 \
       5733 5743 3252 5755 5766 5833 5933 6033 5034 \
       6133 6233 6333 6433 7433 8333 8463 8433 8533