# Constitution Club Web
### The Official Constitution Club Website Software

A Open-Source website for collaborating topics about the U.S. Constitution and similarly oriented educational clubs all over the United States of America.

## Features
- Members can post and discuss recent news and events.
- Breaking down and understanding the rights provided by the U.S. Constitution.
- Built-in permission system.

## Permissions

Permissions are incremental and build on top of on another.

1. **Members** have general access to the site, with the ability to login and contribute to open discussions and create posts.
2. **Secretaries/Treasurers** have access to schedule events and make announcements.
3. The **Vice President** has access to major website actions and helps manage the website and community. This user can promote/demote **Members** to **Secretaries** or **Treasurers**.
4. The **President** has executive control over the website, with the ability to change the permission level of any user to any level. This user is expected to gracefully promote the next-elected president in the club after their term is up, and resign their power.

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
Via the command-line issue `git clone https://github.com/anthonywww/ConstitutionClubWeb`.

#### MySQL/MariaDB Database Initialization
1. Create a database, issue `CREATE DATABASE constitution_club;` in the database CLI monitor.
2. Create a user, issue `CREATE USER 'constitution_club'@'localhost' IDENTIFIED BY 'password';`.
3. Finally, you can issue `FLUSH PRIVILEGES;` to flush the changes to the database.

#### Configure the Website
1. Copy `application/config/config.php.example` to `application/config/config.php` and configure.
2. Copy `application/config/database.php.example` to `application/config/database.php` and configure.
2. Copy `application/config/migration.php.example` to `application/config/migration.php` and configure.
3. Copy `application/config/club.php.example` to `application/config/club.php` and configure.

#### Set up NGINX
1. Copy `vhost.nginx` to `/etc/nginx/sites-enabled/` and configure it to your site instance.
2. Reload nginx `service nginx restart`.

#### Run an initial migration
1. Edit the `application/config/migration.php` file to enable migrations.
2. Using a web-browser, navigate to the `/migrate` and wait for the database tables to be created and initialized.
3. If you get a successful response, disable migrations in `application/config/migration.php` again, otherwise fix any migration issues and refresh the migration page.

#### Login
- You can login using the default user `admin` and password `password`.
- Make sure to disable the default admin account in the `application/config/club.php` configuration file after you are done assigning initial rolls.
- You can disable the account by setting the value from `"password"` to `NULL`, without quotation marks, always ending with a semi-colon.
- If you need to fix a mistake made later in the lifetime of the website, you can set the value `NULL` to a strong password within quotation marks, ending with a semi-colon.
