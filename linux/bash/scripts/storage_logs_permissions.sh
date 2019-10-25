#!/bin/bash

# Execute script like: ./storage_logs_permissions.sh /path/to/desired/folder $USER www-data

_PATH=$1;
_usr=$2;
_grp=$3;

if [[ -z ${_PATH} ]]; then
    echo "You have to specify target folder or a file!";
    exit;
fi

if [[ -z $_usr ]]; then
   _usr=$USER;
fi

if [[ -z $_grp ]]; then
  _grp="www-data"
fi

sudo chown -R $_usr:$_grp ${_PATH};
sudo chmod -R ug+rwx ${_PATH};
