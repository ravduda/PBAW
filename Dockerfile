FROM php:7.4-apache
WORKDIR /var/www/html/
ADD ./ /var/www/html/
RUN chmod 777 php_04_smarty -R
RUN docker-php-ext-install pdo pdo_mysql
EXPOSE 80
