# use latest alpine as parent
FROM alpine:latest

# install mysql
RUN apk add --update mysql

# copy mysql config file inside the container
COPY my.cnf /etc/mysql/my.cnf

# database dump
COPY dump.sql /dump.sql

# and startup script
# this script was taken from https://github.com/Leafney/docker-alpine-mysql/blob/master/startup.sh
# and seems to be working well with some additions for filling test db
COPY startup.sh /usr/bin/mysql_startup.sh
RUN chmod +x /usr/bin/mysql_startup.sh

# make port available to the world outside this container
EXPOSE 3306

VOLUME /var/lib/mysql

# start mysqld process
CMD ["/usr/bin/mysql_startup.sh"]
