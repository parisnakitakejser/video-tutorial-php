FROM pnksh/php-alpine:php8.0

WORKDIR /var/www
COPY . /var/www

# Install WP CLI
RUN curl -O https://raw.githubusercontent.com/wp-cli/builds/gh-pages/phar/wp-cli.phar
RUN chmod +x wp-cli.phar
RUN mv wp-cli.phar /usr/local/bin/wp
RUN wp --info

# Install composer
RUN composer install -n --prefer-dist

# NGINX Settings
COPY ./deploy-files/nginx/sites/ /etc/nginx/sites-available

CMD ["sh", "/var/www/docker-bootup.sh"]