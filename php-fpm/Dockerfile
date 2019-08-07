FROM phpdockerio/php73-fpm:latest

RUN apt-get update \
  && apt-get install --yes git

WORKDIR /application

COPY ["../app/website-skeleton/composer.json", "/application/"]

# RUN /usr/local/bin/composer install
