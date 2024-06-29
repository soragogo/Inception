#!/bin/bash

if ! [ -f /etc/mysql/init.sql ]; then
    touch /etc/mysql/init.sql
fi

echo "CREATE DATABASE $DB_NAME;" > /etc/mysql/init.sql
echo "CREATE USER '$DB_USER'@'%' IDENTIFIED BY '$DB_PASSWORD';" >> /etc/mysql/init.sql
echo "GRANT ALL PRIVILEGES ON *.* TO '$DB_USER'@'%' WITH GRANT OPTION;" >> /etc/mysql/init.sql
echo "FLUSH PRIVILEGES;" >> /etc/mysql/init.sql

echo "CREATE USER '$WP_ADMIN_USER'@'%' IDENTIFIED BY '$WP_ADMIN_PASSWORD';" >> /etc/mysql/init.sql
echo "GRANT ALL ON $DB_NAME.wordpress TO '$WP_ADMIN_USER'@'%' WITH GRANT OPTION;" >> /etc/mysql/init.sql
echo "FLUSH PRIVILEGES;" >> /etc/mysql/init.sql
mysqld_safe
