#!/bin/bash -eu
echo -------------------------------------------------
echo PostgreSQL9.6
echo -------------------------------------------------
# リポジトリ追加
yum -y install https://download.postgresql.org/pub/repos/yum/9.6/redhat/rhel-7.5-x86_64/pgdg-centos96-9.6-3.noarch.rpm
# PostgreSQL9.6インストール
yum -y install postgresql96-server postgresql96-devel postgresql96-contrib
# 初期設定
/usr/pgsql-9.6/bin/postgresql96-setup initdb
# 設定ファイルバックアップ
mv /var/lib/pgsql/9.6/data/postgresql.conf /var/lib/pgsql/9.6/data/postgresql.conf.org
mv /var/lib/pgsql/9.6/data/pg_hba.conf /var/lib/pgsql/9.6/data/pg_hba.conf.org
# 設定ファイルコピー
cp $BASE_DIR/postgresql/postgresql.conf /var/lib/pgsql/9.6/data/postgresql.conf
cp $BASE_DIR/postgresql/pg_hba.conf /var/lib/pgsql/9.6/data/pg_hba.conf
# PostgreSQL9.6起動&有効
systemctl start postgresql-9.6
systemctl enable postgresql-9.6
echo -------------------------------------------------
echo PostgreSQL9.6
echo -------------------------------------------------
psql --version
echo -------------------------------------------------
echo Create DB
echo -------------------------------------------------
psql -U postgres -c "create role testuser login password 'secret';";
psql -U postgres -c "create database app_db;";
