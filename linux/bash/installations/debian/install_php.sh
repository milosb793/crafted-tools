#/bin/env bash


if [[ -z ${PHP_VER} ]]; then
    echo "You need to specify the PHP version as a param. Options: 7.1, 7.2, 7.3, 7.4";
    echo "Example . ${BASH_SOURCE} 7.3"
    return 1;
fi

PHP_VER=$1;
PHP_EXT=(
    cli,
    common,
    curl,
    gd,
    json,
    mbstring,
    mysql,
    http,
    opcache,
    readline,
    xml,
    bcmath,
    bz2,
    intl,
    zip,
    pdo,
    sqlite,
    soap,
    dom
    gmagick,
    SimpleXML,
    ssh2,
    xmlreader,
    date,
    exif,
    filter,
    ftp,
    hash,
    iconv
    imagick
    libxml,
    mysqli,
    openssl,
    pcre,
    posix,
    sockets,
    SPL,
    tokenizer,
    zlib
);


# PHP installation
echo "--------------------";
echo "Installing PHP dependences ...";
echo "--------------------";
sudo apt-get install apt-transport-https lsb-release ca-certificates -y;
wget -O /etc/apt/trusted.gpg.d/php.gpg https://packages.sury.org/php/apt.gpg;
echo "deb https://packages.sury.org/php/ $(lsb_release -sc) main" > /etc/apt/sources.list.d/php.list;
sudo apt-get update -y;

echo "--------------------";
echo "Installing PHP additional packages";
echo "--------------------";
sudo apt-get install php$PHP_VER -y;

for ext in $PHP_EXT; do
    sudo apt-get install php$PHP_VER-$ext -y;
done;
