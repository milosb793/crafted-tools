#/bin/env bash

# PHP 7.2 installation
echo "--------------------";
echo "Installing PHP...";
echo "--------------------";
sudo apt-get install apt-transport-https lsb-release ca-certificates -y;
wget -O /etc/apt/trusted.gpg.d/php.gpg https://packages.sury.org/php/apt.gpg;
echo "deb https://packages.sury.org/php/ $(lsb_release -sc) main" > /etc/apt/sources.list.d/php.list;
sudo apt-get update -y;

echo "--------------------";
echo "Installing PHP additional packages";
echo "--------------------";
sudo apt-get install php7.2 -y;
sudo apt-get install php7.2-cli php7.2-common php7.2-curl \
php7.2-gd php7.2-json php7.2-mbstring php7.2-mysql php7.2-http \
php7.2-opcache php7.2-readline php7.2-xml php7.2-bcmath php7.2-curl \
php7.2-bz2 php7.2-mbstring php7.2-intl php7.2-zip -y;
