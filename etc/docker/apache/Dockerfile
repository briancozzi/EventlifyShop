#FROM httpd:alpine
FROM php:8.1-apache

ADD etc/infra/eventlify.conf /etc/apache2/sites-available/eventlify.conf 
RUN mkdir -p /app
ADD . /app
ADD . /var/www/html

RUN echo "Include /etc/apache2/sites-available/eventlify.conf" \
    >> /etc/apache2/apache2.conf