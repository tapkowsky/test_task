# use latest alpine as parent
FROM alpine:latest

# install nginx
RUN apk add --update nginx

# copy nginx config file inside the container
COPY default.conf /etc/nginx/conf.d/default.conf

# create dir for pid file
RUN mkdir /run/nginx

# make port available to the world outside this container
EXPOSE 80

# start process
CMD ["/usr/sbin/nginx", "-g", "daemon off;"]
