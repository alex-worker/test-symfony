FROM postgres:alpine
ADD ./backup.sql /docker-entrypoint-initdb.d/install.sql
RUN chmod -R 775 /docker-entrypoint-initdb.d