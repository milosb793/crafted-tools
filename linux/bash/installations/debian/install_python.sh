#/bin/env bash

# Install Python
echo "--------------------"
echo "Installing Python";
echo "--------------------"

sudo apt install build-essential zlib1g-dev libncurses5-dev libgdbm-dev libnss3-dev libssl-dev libreadline-dev libffi-dev wget -y;
curl -O https://www.python.org/ftp/python/3.7.3/Python-3.7.3.tar.xz;
tar -xf Python-3.7.3.tar.xz;

cd Python-3.7.3;
./configure --enable-optimizations;
make -j 8;
sudo make altinstall;
cd .. && sudo rm -rf Python-3.7.3/ Python-3.7.3.tar.xz;
sudo apt-get install python3-pip -y;
