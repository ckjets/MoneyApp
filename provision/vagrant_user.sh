echo -------------------------------------------------
echo Composer
echo -------------------------------------------------
php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"
php composer-setup.php
php -r "unlink('composer-setup.php');"
sudo mv composer.phar /usr/local/bin/composer
composer

echo -------------------------------------------------
echo プロジェクト設定
echo -------------------------------------------------
cd /app/cake
composer update
composer install --no-plugins
bin/cake migrations migrate
bin/cake migrations seed
