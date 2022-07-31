FROM php:8.1 as php

RUN apt-get update -y
RUN apt-get install -y unzip libpq-dev libcurl4-gnutls-dev nodejs npm
RUN docker-php-ext-install pdo pdo_mysql bcmath

RUN pecl install -o -f redis \
    && rm -rf /tmp/pear \
    && docker-php-ext-enable redis

WORKDIR /var/www
COPY . .

COPY --from=composer:2.3.5 /usr/bin/composer /usr/bin/composer

ENV PORT=2323

RUN ["chmod", "+x", "docker-scripts/entrypoint.sh"]
# or run chmod +x docker-scripts/entrypoint.sh

ENTRYPOINT [ "sh" ,"docker-scripts/entrypoint.sh" ]

# ==============================================================================
# #  node
# FROM node:latest as node

# WORKDIR /var/www
# COPY . .


# RUN npm install
# RUN npm build

# VOLUME /var/www/node_modules
