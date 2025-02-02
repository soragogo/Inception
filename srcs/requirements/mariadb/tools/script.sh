#!/bin/bash

if ! [ -f /etc/mysql/init.sql ]; then
    touch /etc/mysql/init.sql
fi

echo "CREATE DATABASE $(cat $DB_NAME_FILE);" > /etc/mysql/init.sql
echo "CREATE USER '$(cat $DB_USER_FILE)'@'%' IDENTIFIED BY '$(cat $DB_PASSWORD_FILE)';" >> /etc/mysql/init.sql
echo "GRANT ALL PRIVILEGES ON *.* TO '$(cat $DB_USER_FILE)'@'%' WITH GRANT OPTION;" >> /etc/mysql/init.sql
echo "FLUSH PRIVILEGES;" >> /etc/mysql/init.sql

mysqld_safe
