FROM phpdockerio/php73-fpm:latest
WORKDIR "/application"

# RUN mkdir /application/var
# RUN mkdir /application/.composer

# RUN chmod 777 var
# RUN chmod 777 .composer

RUN apt-get update \
    && apt-get -y --no-install-recommends install \
    && apt-get -y install git
