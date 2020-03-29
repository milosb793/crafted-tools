#/bin/env bash

# Installing MongoDB packages
echo "--------------------"
echo "Installing MongoDB..."
echo "--------------------"

sudo apt-get install -y mongodb;
sudo service mongod start;
