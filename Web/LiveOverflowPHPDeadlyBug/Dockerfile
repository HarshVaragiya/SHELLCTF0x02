FROM php:apache
RUN adduser www-data

USER www-data
COPY index.php /var/www/html/index.php.bak
COPY index.php /var/www/html/index.php
