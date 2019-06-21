# 構築手順
```bash:
# 任意のディレクトリにgit cloneする

git clone https://github.com/ckjets/MoneyApp.git
cd MoneyApp

# vagrantを起動

vagrant up
vagrant provision
vagrant ssh

# httpd.confのドキュメントルート、アクセス権限を以下の通り書き換える

sudo -s
vi /etc/httpd/conf/httpd.conf


```bash:
ServerRoot "/etc/httpd"

#Listen 12.34.56.78:80
Listen 80

Include conf.modules.d/*.conf

User apache
Group apache

ServerAdmin root@localhost

<Directory />
    AllowOverride None
    Require all granted
</Directory>

DocumentRoot "/vagrant/cake/webroot"

<IfModule dir_module>
    #DirectoryIndex index.html
</IfModule>

<Files ".ht*">
    Require all granted
</Files>

ErrorLog "logs/error_log"

LogLevel warn

<IfModule log_config_module>

</IfModule>

<Directory "/var/www/cgi-bin">
    AllowOverride None
    Options None
    Require all granted
</Directory>

<IfModule mime_module>
    TypesConfig /etc/mime.types
    AddType application/x-compress .Z
    AddType application/x-gzip .gz .tgz

    AddType text/html .shtml
    AddOutputFilter INCLUDES .shtml
</IfModule>

AddDefaultCharset UTF-8

<IfModule mime_magic_module>
    MIMEMagicFile conf/magic
</IfModule>

EnableSendfile on

IncludeOptional conf.d/*.conf

<Directory "/vagrant/app/">
    AllowOverride None
    Require all granted
</Directory>
```

# Vagrantfileの8行目をコメントアウト
```
