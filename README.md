# Constitution Club Web
### The Official Constitution Club Website Software

A Open-Source website for collaborating topics about the U.S. Constitution and similarly oriented educational clubs all over the United States of America.

## Features
- Platform for posting news, events, and updates.
- Breaking down and understanding the rights provided by the U.S. Constitution.
- An open discussion board.

## Installation
For best results deploy on a Debian GNU/Linux system.

#### Prerequisites
- nginx (1.10.3+)
- php7.1-fpm (7.1+)
- php7.1-curl
- php7.1-json
- php7.1-mbstring
- php7.1-mysql
- php7.1-xml
- php7.1-common
- mariadb-server (10.1+) or MySQL.

#### Clone the repository
Via the command-line issue `git clone https://github.com/anthonywww/ConsitutionClubWeb`.

#### MySQL/MariaDB Database Initialization
1. Create a database, issue `CREATE DATABASE constitution_club;` in the database CLI monitor.
2. Create a user, issue `CREATE USER 'constitution_club'@'localhost' IDENTIFIED BY 'password';`.
3. Finally, you can issue `FLUSH PRIVILEGES;` to flush the changes to the database.

#### Configure the Website
1. Copy `application/config/config.php.example` to `application/config/config.php` and configure.
2. Copy `application/config/database.php.example` to `application/config/database.php` and configure.
3. Copy `application/config/club.php.example` to `application/config/club.php` and configure.

#### Set up NGINX
- Copy `vhost.nginx` to `/etc/nginx/sites-enabled/` and configure it to your site instance.
