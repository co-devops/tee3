FROM jdecode/laravel-mysql:3

COPY . .
RUN rm -rf vendor
RUN composer install -n --prefer-dist

RUN a2enmod rewrite
#change uid and gid of apache to docker user uid/gid
RUN usermod -u 1000 www-data && groupmod -g 1000 www-data

#change ownership of our applications
RUN chown -R www-data:www-data /var/www/html/storage /var/www/html/bootstrap

