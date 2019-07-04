# 構築手順

## 環境

```
$ vagrant -v
Vagrant 2.2.4
$ VBoxManage -V
6.0.4r128413
$ vagrant plugin install vagrant-vbguest
$ vagrant plugin list
vagrant-vbguest (0.18.0, global)
```

以下ホストOSで実行
```
sudo vi /etc/hosts

# 以下追加
192.168.33.10 www.moneyapp.com
```

```bash:
$ git clone https://github.com/ckjets/MoneyApp.git
$ cd MoneyApp
$ vagrant up
$ vagrant ssh
```

- IP: http://192.168.33.10
- ドメイン: http://www.moneyapp.com
