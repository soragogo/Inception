#!/bin/bash
cd /var/www/html

if [ ! -f /usr/local/bin/wp ]; then
    curl -O https://raw.githubusercontent.com/wp-cli/builds/gh-pages/phar/wp-cli.phar
    chmod +x wp-cli.phar
    mv wp-cli.phar /usr/local/bin/wp
fi

if [ ! -f wp-config.php ]; then
    wp core download --url=$DOMAIN_NAME --allow-root
fi

if [ ! -f wp-config.php ]; then
    wp config create --url=$DOMAIN_NAME --dbname=$(cat $DB_NAME_FILE) --dbuser=$(cat $DB_USER_FILE) --dbpass=$(cat $DB_PASSWORD_FILE) --dbhost=$(cat $DB_HOST_FILE) --dbprefix=$(cat $DB_PREFIX_FILE) --allow-root
fi

if [ ! $(wp core is-installed --url=$DOMAIN_NAME --allow-root) ]; then
    wp core install --url=$DOMAIN_NAME --title=inception --admin_user=$WP_ADMIN_USER --admin_password=$(cat $WP_ADMIN_PASSWORD_FILE) --admin_email=$(cat $WP_ADMIN_EMAIL_FILE) --allow-root --skip-email
fi

if ! wp user get $WP_AUTHOR_USER --url=$DOMAIN_NAME --allow-root > /dev/null 2>&1; then
    wp user create $WP_AUTHOR_USER $(cat $WP_AUTHOR_EMAIL_FILE) --role=author --user_pass=$(cat $WP_AUTHOR_PASSWORD_FILE) --url=$DOMAIN_NAME --allow-root --porcelain
fi

php-fpm8.2 -F
