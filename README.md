# osamuya/synchronous2 for PHP [![Build Status](https://img.shields.io/travis/Seldaek/monolog.svg)](https://github.com/osamuya/synchronous2)

Synchronize the source with Rsync, and migrate the database with MySQLDump and restore. Since communication between remote hosts is only SSH, you need to set them up beforehand. Also old systems may not work.

## Clone or Zip download

````
git clone git@github.com:osamuya/synchronous2.git
````
or I download it myself

## Composer

````
curl -s http://getcomposer.org/installer | php
````
or
````
php -r "readfile('https://getcomposer.org/installer');" > composer-setup.php
php composer-setup.php
````
## Installation

````
php composer.phar install
````

