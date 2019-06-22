cd /app/cake
composer install
bin/cake migrations migrate
bin/cake migrations seed
