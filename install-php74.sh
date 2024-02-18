### INSTALING PHP 7.4
sudo apt -y install software-properties-common;
sudo add-apt-repository -y ppa:ondrej/php
#yes y | apt-get install -y php7.4;
#update-alternatives --set php /usr/bin/php7.4
#update-alternatives --config php;
### INSTALING COMPOSER
# curl -sS https://getcomposer.org/installer | php
# php composer.phar update
sudo apt-get update
sudo apt-get install apache2 libapache2-mod-wsgi
sudo add-apt-repository -y ppa:ondrej/php
sudo apt update -y;
sudo apt install php7.4
sudo apt update -y;
sudo a2
yes y | apt-get install -y php7.4;
sudo /usr/bin/php7.4 --ini;
sudo a2enmod php7.4;
sudo update-alternatives --set php /usr/bin/php7.4;
sudo service apache2 restart;
sudo apt-get install -y php7.4-mysql;
sudo apt install php7.4-curl;