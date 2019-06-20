# 構築手順
```bash:
# 任意のディレクトリにgit cloneする

git clone https://github.com/ckjets/MoneyManagementApp_new.git
cd MoneyManagementApp_new

# vagrantを起動

vagrant up
vagrant provision
vagrant ssh

# httpd.confのドキュメントルート、アクセス権限を以下の通り書き換える

sudo -s
vi /etc/httpd/conf/httpd.conf

# DocumentRootの変更
- DocumentRoot "/var/www/html"
+ DocumentRoot "/vagrant/cake/webroot"

# Deny access to the entirety of your server's filesystem. You must
# explicitly permit access to web content directories in other
# <Directory> blocks below.
#
<Directory />
+   AllowOverride All
-   AllowOverride None  
+   Require all granted
-   Require all denied
</Directory>

# Vagrantfileの8行目をコメントアウト
```
