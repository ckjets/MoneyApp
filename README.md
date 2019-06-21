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

```

```

# Vagrantfileの8行目をコメントアウト
```
