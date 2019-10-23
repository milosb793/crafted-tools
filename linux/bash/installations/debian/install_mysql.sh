#/bin/env bash

# Installing mysql 
echo "--------------------"
echo "Installing MySQL"
echo "--------------------"
cd /tmp && wget https://dev.mysql.com/get/mysql-apt-config_0.8.10-1_all.deb && sudo dpkg -i mysql-apt-config_0.8.10-1_all.deb && sudo apt update -y;
sudo apt install mysql-server -y;
mysql_secure_installation;
