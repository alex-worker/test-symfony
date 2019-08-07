FROM phpdockerio/php73-fpm:latest
WORKDIR "/application"

RUN mkdir var
RUN chmod 777 var

RUN apt-get update \
    && apt-get -y --no-install-recommends install \
    && apt-get -y install git
