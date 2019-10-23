#/bin/env bash

echo "--------------------"
echo "Installing node and npm..."
echo "--------------------"
sudo apt-get install curl software-properties-common -y;
curl -sL https://deb.nodesource.com/setup_10.x | sudo bash -
sudo apt-get install nodejs -y;
