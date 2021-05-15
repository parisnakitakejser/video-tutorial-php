FROM pnksh/php-alpine:php8.0

WORKDIR /var/www
COPY ./app /var/www

# Install WP CLI
RUN curl -O https://raw.githubusercontent.com/wp-cli/builds/gh-pages/phar/wp-cli.phar
RUN chmod +x wp-cli.phar
RUN mv wp-cli.phar /usr/local/bin/wp
RUN wp --info

# Install composer
RUN composer install -n --prefer-dist

COPY ./docker-bootup.sh /var/app/docker-bootup.sh
CMD ["sh", "/var/app/docker-bootup.sh"]