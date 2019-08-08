FROM phpdockerio/php73-fpm:latest

RUN apt-get update \
  && apt-get install --yes git

WORKDIR /application

# USER www-data

# COPY ["./website-skeleton/composer.json", "/application/"]
# RUN /usr/local/bin/composer install

# CMD ["/usr/sbin/php-fpm7.3", "-O" ]
# Open up fcgi port
# EXPOSE 9000