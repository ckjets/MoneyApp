#!/bin/bash -eu

echo -------------------------------------------------
echo
echo                    変数
echo
echo -------------------------------------------------

BASE_DIR=/vagrant/provision

echo -------------------------------------------------
echo
echo                    基本
echo
echo -------------------------------------------------

. $BASE_DIR/_base.sh

echo -------------------------------------------------
echo
echo                    PHP, Apache
echo
echo -------------------------------------------------

. $BASE_DIR/_php.sh

echo -------------------------------------------------
echo
echo                    PostgreSQL
echo
echo -------------------------------------------------

. $BASE_DIR/_postgresql.sh

echo -------------------------------------------------
echo
echo                    Permission
echo
echo -------------------------------------------------

find /var/log -type d -exec chmod a+rx {} +
find /var/log -type f -exec chmod a+r {} +

echo -------------------------------------------------
echo
echo                    クリア
echo
echo -------------------------------------------------

yum clean all
history -c
