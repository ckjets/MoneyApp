echo -------------------------------------------------
echo
echo                プロジェクト設定
echo
echo -------------------------------------------------

cd /app/cake
composer install
bin/cake migrations migrate
bin/cake migrations seed
