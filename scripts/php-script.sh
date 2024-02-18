 ### INSTALING PHP 7.4
#apt -y install software-properties-common;
#add-apt-repository ppa:ondrej/php;
#yes y | apt-get install -y php7.4;
#update-alternatives --set php /usr/bin/php7.4
#update-alternatives --config php;
### INSTALING COMPOSER
# curl -sS https://getcomposer.org/installer | php
# php composer.phar update
sudo apt update -y;
sudo apt -y install software-properties-common;
sudo a2dismod php8.1 -y;
sudo a2dismod mpm_prefork -y;
yes y | apt-get install -y php7.4;
sudo sudo apt-get install -y php7.4-cli php7.4-json php7.4-common php7.4-mysql php7.4-zip php7.4-gd php7.4-mbstring php7.4-curl php7.4-xml php7.4-bcmath
sudo update-alternatives --set php /usr/bin/php7.4;
sudo service apache2 restart;
sudo apt-get install -y php7.4-mysql;
sudo apt install php7.4-curl;

sudo apt update -y;
# sudo apt-get install mysql-server;
# sudo systemctl start mysql.service;

docker start back;
