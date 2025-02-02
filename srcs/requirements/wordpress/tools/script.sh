#!/bin/bash
cd /var/www/html

if [ ! -f /usr/local/bin/wp ]; then
    curl -O https://raw.githubusercontent.com/wp-cli/builds/gh-pages/phar/wp-cli.phar
    chmod +x wp-cli.phar
    mv wp-cli.phar /usr/local/bin/wp
fi

if [ ! -f wp-config.php ]; then
    wp core download --allow-root
fi

if [ ! -f wp-config.php ]; then
    wp config create --dbname=$DB_NAME --dbuser=$DB_USER --dbpass=$DB_PASSWORD --dbhost=$DB_HOST --dbprefix=$DB_PREFIX --allow-root
fi

if [ ! $(wp core is-installed --allow-root)]; then
    wp core install --url=ekamada.42.fr --title=inception --admin_user=$WP_ADMIN_USER --admin_password=$WP_ADMIN_PASSWORD --admin_email=$WP_ADMIN_EMAIL --allow-root
fi

if ! wp user get $WP_AUTHOR_USER --allow-root > /dev/null 2>&1; then
    wp user create $WP_AUTHOR_USER $WP_AUTHOR_EMAIL --role=author --user_pass=$WP_AUTHOR_PASSWORD --allow-root
fi


php-fpm8.2 -F
