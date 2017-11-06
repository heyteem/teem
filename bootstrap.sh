#!/usr/bin/env bash

ROOT_MySQL_PASSWORD=mjIlspFK8O0AKH7sQREn
LARAVEL_DATABASE_NAME=teem
LARAVEL_DATABASE_USER=laraveluser
LARAVEL_DATABASE_USER_PASSWORD=8e0G8KmQfYjpESZ6kyMe

apt-get -y update
apt-get -y upgrade

# Installing Apache2
apt-get install -y apache2
if ! [ -L /var/www/html ]; then
  rm -rf /var/www/html
  ln -fs /vagrant/public /var/www/html
fi

echo "ServerName localhost" >> /etc/apache2/apache2.conf

# Installing PHP and it"s dependencies
apt-get install -y php libapache2-mod-php php-mcrypt php-mysql
printf "<IfModule mod_dir.c>\n\tDirectoryIndex index.php index.html index.cgi index.pl index.xhtml index.htm\n</IfModule>" > /etc/apache2/mods-enabled/dir.conf
service apache2 restart

# Set allow laravel to route subdirectories
sed -i 's/AllowOverride None/AllowOverride All/g' /etc/apache2/apache2.conf
a2enmod rewrite
service apache2 restart


# Intalling MySQL Server
export DEBIAN_FRONTEND=noninteractive
debconf-set-selections <<< "mysql-server mysql-server/root_password password $ROOT_MySQL_PASSWORD"
debconf-set-selections <<< "mysql-server mysql-server/root_password_again password $ROOT_MySQL_PASSWORD"
apt-get install -y mysql-server

MySQL_COMMAND="mysql -u root -p$ROOT_MySQL_PASSWORD"

$MySQL_COMMAND <<_EOF_
  DELETE FROM mysql.user WHERE User="";
  DELETE FROM mysql.user WHERE User="root" AND Host NOT IN ("localhost", "127.0.0.1", "::1");
  DROP DATABASE IF EXISTS test;
  DELETE FROM mysql.db WHERE Db="test" OR Db="test\\_%";
  FLUSH PRIVILEGES;
_EOF_

# Intalling Laravel Dependancies
apt-get install -y php7.0-mbstring php7.0-xml php7.0-curl php7.0-bcmath unzip
curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Setup the DB
$MySQL_COMMAND <<_EOF_
  CREATE DATABASE $LARAVEL_DATABASE_NAME DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;
  GRANT ALL ON $LARAVEL_DATABASE_NAME.* TO '$LARAVEL_DATABASE_USER'@'localhost' IDENTIFIED BY '$LARAVEL_DATABASE_USER_PASSWORD';
  FLUSH PRIVILEGES;
_EOF_

cd /vagrant
composer install --no-scripts
composer install

# TODO: Create .env
echo "APP_ENV=development" > .env
echo "APP_DEBUG=true" >> .env
#echo "APP_KEY=b809vCwvtawRbsG0BmP1tWgnlXQypSKf" >> .env
echo "APP_URL=http://localhost" >> .env
echo "DB_HOST=127.0.0.1" >> .env
echo "DB_DATABASE=$LARAVEL_DATABASE_NAME" >> .env
echo "DB_USERNAME=$LARAVEL_DATABASE_USER" >> .env
echo "DB_PASSWORD=$LARAVEL_DATABASE_USER_PASSWORD" >> .env
#echo "CACHE_DRIVER=file" >> .env
#echo "SESSION_DRIVER=file" >> .env
#echo "QUEUE_DRIVER=sync" >> .env
#echo "REDIS_HOST=127.0.0.1" >> .env
#echo "REDIS_PASSWORD=null" >> .env
#echo "REDIS_PORT=6379" >> .env
#echo "MAIL_DRIVER=smtp" >> .env
#echo "MAIL_HOST=mailtrap.io" >> .env
#echo "MAIL_PORT=2525" >> .env
#echo "MAIL_USERNAME=null" >> .env
#echo "MAIL_PASSWORD=null" >> .env
#echo "MAIL_ENCRYPTION=null" >> .env

# Set up beanstalkd
apt-get install -y beanstalkd
#php artisan queue:listen &

echo "Final Steps"
echo "  1. Set values in the .env file"
echo "  2. Import a dump of the staging database"
echo "  3. Run 'chmod -R 777 storage/' from the host machine"
echo "  3. Run migrations"
echo "To test the queue Run 'php artisan queue:listen' from the '/vagrant' directory"
    
