FROM php:8.1-fpm-alpine

ADD . /app
#WORKDIR /app

RUN apk add --no-cache libpng oniguruma-dev libpng-dev zip libzip-dev && \
	docker-php-ext-install gd zip && \
	docker-php-ext-install pdo_mysql && \
	docker-php-ext-configure mbstring --enable-mbstring && \
	apk del libpng-dev && \
	mkdir vendor && chmod -R 777 .


WORKDIR /app

RUN rm -f /usr/local/bin/composer
#RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer
RUN curl -s https://getcomposer.org/installer | php
#RUN wget https://raw.githubusercontent.com/composer/getcomposer.org/1b137f8bf6db3e79a38a5bc45324414a6b1f9df2/web/installer -O - -q | php -- --quiet

RUN mv composer.phar /usr/local/bin/composer

#COPY php-fpm/laravel.ini /usr/local/etc/php/conf.d
#COPY php-fpm/pool.conf /usr/local/etc/php-fpm.d/
#COPY php-fpm/php72.ini /usr/local/etc/php/php.ini

RUN composer install --optimize-autoloader --no-dev

RUN chown -R www-data:www-data /app

CMD ["php-fpm"]

EXPOSE 9000