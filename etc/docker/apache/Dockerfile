#FROM httpd:alpine
FROM php:8.1-apache

ADD etc/infra/eventlify.conf /usr/local/apache2/conf/eventlify.conf 
RUN mkdir -p /app
ADD . /app
ADD . /var/www/html

RUN echo "Include /usr/local/apache2/conf/eventlify.conf" \
    >> /usr/local/apache2/conf/httpd.conf