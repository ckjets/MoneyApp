echo -------------------------------------------------
echo
echo                PHP7.3
echo
echo -------------------------------------------------

yum -y install epel-release
yum -y install http://rpms.famillecollet.com/enterprise/remi-release-7.rpm
yum -y install --disablerepo=* --enablerepo=epel libargon2
yum -y install --enablerepo=remi-php73 php php-devel php-mbstring php-pdo php-gd php-xml php-mcrypt php-intl php-pgsql
yum -y install zip unzip git

chgrp -R vagrant /var/lib/php

echo -------------------------------------------------
echo
echo                Apache 起動
echo
echo -------------------------------------------------

cp $BASE_DIR/apache/cake.conf /etc/httpd/conf.d
systemctl start httpd
systemctl enable httpd
