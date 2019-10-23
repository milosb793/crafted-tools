# Installing Docker 
echo "--------------------"
echo "Installing docker"
echo "--------------------"
sudo apt-get install apt-transport-https ca-certificates curl gnupg2 software-properties-common -y;
sudo add-apt-repository "deb [arch=amd64] https://download.docker.com/linux/debian $(lsb_release -cs) stable";
sudo apt-get update -y;
sudo apt-get install docker-ce docker-ce-cli containerd.io -y;
# sudo sysctl -w vm.max_map_count=262144