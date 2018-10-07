# use latest alpine as parent
FROM alpine:latest

# install php
RUN apk add --update php7-fpm php7-pdo_mysql

# copy config files inside the container
COPY php-fpm.conf /etc/php7/php-fpm.conf
COPY www.conf /etc/php7/php-fpm.d/www.conf

# create dir
RUN mkdir -p /var/www/html

# make port available to the world outside this container
EXPOSE 9000

VOLUME /var/www/html

# start process
CMD ["/usr/sbin/php-fpm7"]
