FROM php:8.0.0RC3-fpm

RUN apt-get update && \
	apt-get install -y zip unzip git zlib1g-dev

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/bin --filename=composer

WORKDIR /app
