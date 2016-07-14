# acrossti.me

## what is acrossti.me?
    
    A niche social network for creatives:
       writers, programmers, mathematicians, game developers, painters, guitarists, composers
    A Facebook that's productive
    A site dedicated to helping people share their creativity and creations and motivating people to collaborate and endeavour with one another artistically
    An open platform centered on the best of humanity rather than being a money-grubbing corporate item that rides on the whims of private investors, stockholders, and board members
    A platform that is open and free and built upon a foundation of everlasting ideology
    Something that everyone can contribute to
    Something designed to withstand the tests of time: to transcend time itself.
    It can only be done with the collective intelligence and support of countless individuals, each striving in their daily lives to better themselves and help those around them in need.
    Acrossti.me should not be owned by any one you or me. It should be everyone.

What do __*you*__ love to do?


## linux development environment

**Ubuntu 16.04 Packages:**

- apache2
- php7.0
- libapache2-mod-php7.0
- php7.0-mysql
- mysql-server

## apache2 conf

Located at `/etc/apache2/sites-available/acrosstime-dev.conf`:

    <VirtualHost *:80>
      ServerName l.acrossti.me
      DocumentRoot /var/www/atv/public

      <Directory /var/www/atv/public>
        DirectoryIndex index.php
        Options +Indexes +FollowSymLinks -MultiViews
        AllowOverride None
        # 2.2
        Require all granted 
        Allow from all # 2.4
        <IfModule mod_rewrite.c>
            RewriteEngine On
            #RewriteBase /path/to/app
            RewriteCond %{REQUEST_FILENAME} !-f
            RewriteRule ^ index.php [QSA,L]
        </IfModule>
      </Directory>

      ErrorLog ${APACHE_LOG_DIR}/atv.error.log
      CustomLog ${APACHE_LOG_DIR}/atv.access.log common
    </VirtualHost>

