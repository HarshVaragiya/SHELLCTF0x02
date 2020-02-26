FROM php:5.6-apache
#MAINTAINER porchn <pichai.chin@gmail.com>

ENV TZ=Asia/Bangkok
# Set Server timezone.
RUN echo $TZ > /etc/timezone \
    && dpkg-reconfigure -f noninteractive tzdata \
    && echo date.timezone = $TZ > /usr/local/etc/php/conf.d/docker-php-ext-timezone.ini

RUN mkdir -p /etc/apache2/ssl

# Defaul config php.ini
COPY php.ini /usr/local/etc/php/php.ini
COPY ./index.php /var/www/html/

# RUN apt-get -y update && apt-get -y upgrade
RUN apt-get -y update \
    && apt-get install -y --no-install-recommends \
    libmemcached11 \
    libmemcachedutil2 \
    libmemcached-dev \
    libz-dev \
    build-essential \
    apache2-utils \
    libcurl4-openssl-dev \
    libssl-dev \
    libc-client2007e-dev \
    libkrb5-dev \
    libmcrypt-dev \
    unixodbc-dev \
    && apt-get clean \
    && rm -r /var/lib/apt/lists/*



# Install Extension mysqli mysql mbstring opcache pdo_mysql gd mcrypt zip imap bcmath soap pdo
RUN docker-php-ext-install mysql-server

# Enable Apache mod_rewrite
RUN a2enmod rewrite ssl headers


RUN chown -R www-data:www-data /var/www
# Create Volume
VOLUME ['/etc/apache2/sites-enabled','/var/www','/var/log/apache2']

EXPOSE 80
EXPOSE 443
