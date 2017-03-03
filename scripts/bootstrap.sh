#!/usr/bin/env bash

# Use single quotes instead of double quotes to make it work with special-character passwords
PASSWORD='yourpassword'
PROJECTFOLDER='maplesyrup'
upload_max_filesize=240M
post_max_size=50M
max_execution_time=100
max_input_time=223

# create project folder
if [ ! -d "/var/www/html/www" ]
  then
    sudo mkdir "/var/www/html/www"
fi
if [ ! -d "/vagrant/apache-logs" ]
  then
    sudo mkdir "/vagrant/apache-logs"
fi


# update / upgrade
sudo apt-get update > /dev/null
sudo apt-get -y upgrade > /dev/null

# install apache 2.5 and php 5.5
sudo apt-get install -y apache2 > /dev/null
sudo apt-get install -y php5 > /dev/null

# install mysql and give password to installer
sudo debconf-set-selections <<< "mysql-server mysql-server/root_password password $PASSWORD"
sudo debconf-set-selections <<< "mysql-server mysql-server/root_password_again password $PASSWORD"
sudo apt-get -y install mysql-server > /dev/null
sudo apt-get -y install php5-mysql php5-curl > /dev/null
sudo apt-get -y install php5-xsl

if [ ! -f /var/swap.1 ]
	then
		echo "Loading swap..."
		/bin/dd if=/dev/zero of=/var/swap.1 bs=1M count=1024 > /dev/null
		/sbin/mkswap /var/swap.1 > /dev/null
		/sbin/swapon /var/swap.1 > /dev/null
fi

# install phpmyadmin and give password(s) to installer
# for simplicity I'm using the same password for mysql and phpmyadmin
sudo debconf-set-selections <<< "phpmyadmin phpmyadmin/dbconfig-install boolean true"
sudo debconf-set-selections <<< "phpmyadmin phpmyadmin/app-password-confirm password $PASSWORD"
sudo debconf-set-selections <<< "phpmyadmin phpmyadmin/mysql/admin-pass password $PASSWORD"
sudo debconf-set-selections <<< "phpmyadmin phpmyadmin/mysql/app-pass password $PASSWORD"
sudo debconf-set-selections <<< "phpmyadmin phpmyadmin/reconfigure-webserver multiselect apache2"
sudo apt-get -y install phpmyadmin

# setup hosts file
VHOST=$(cat <<EOF
<VirtualHost *:80>
  ServerAdmin youremail@youremail.com
  ServerName dev.io
  ErrorLog /vagrant/apache-logs/error.log
  CustomLog /vagrant/apache-logs/access.log common
  DocumentRoot "/var/www/html/www"
  <Directory "/var/www/html/www">
      AllowOverride All
      Require all granted
  </Directory>
</VirtualHost>
EOF
)
echo "${VHOST}" > /etc/apache2/sites-available/000-default.conf
echo "ServerName dev.io:80" >> /etc/apache2/apache2.conf

if [ -a /vagrant/backup/db.sql ]
  then
    echo "Backup of database being restored..."
    bash /vagrant/scripts/importdb.sh
else
  echo "No backup present of database."
fi
# enable mod_rewrite
sudo a2enmod rewrite

# restart apache
service apache2 restart

# install git
sudo apt-get -y install git > /dev/null

# update PHP settings
for key in upload_max_filesize post_max_size max_execution_time max_input_time
do
 sed -i "s/^\($key\).*/\1 $(eval echo \${$key})/" /etc/php5/apache2/php.ini
done

# install Composer
curl -s https://getcomposer.org/installer | php > /dev/null
mv composer.phar /usr/local/bin/composer
