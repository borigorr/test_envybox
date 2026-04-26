FROM php:8.5.5-fpm-alpine

ARG UID=1000
ARG GID=1000

RUN apk --update add wget \
    curl \
    git \
    libpq-dev

RUN docker-php-ext-install pdo pdo_pgsql

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/bin --filename=composer
RUN mkdir -p /var/www

WORKDIR /opt/app

RUN addgroup -S -g ${GID} developer && adduser developer -S -H --disabled-password -g "developer" -h /dev/null -u ${UID} -G developer

USER developer
