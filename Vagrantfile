Vagrant.configure("2") do |config|
  config.vm.box = "centos/7"

config.vm.network "forwarded_port", guest: 80, host: 8080, host_ip: "127.0.0.1"
config.vm.network "private_network", ip: "192.168.33.10"

# Apacheをインストール後、コメントアウトしてください
 config.vm.synced_folder "~/desktop/moneyApp/", "/vagrant",owner: 'vagrant', group: 'apache', mount_options: ['dmode=777', 'fmode=777']

# プロビジョニング
config.vm.provision "shell", inline: <<-SHELL

  # Apache
  echo --INSTALL APACHE--
  sudo yum -y install httpd

  # PHP(7.3)
   echo --INSTALL PHP--
   sudo yum -y install epel-release
   sudo yum -y install http://rpms.famillecollet.com/enterprise/remi-release-7.rpm
   sudo yum -y install --disablerepo=* --enablerepo=epel libargon2
   sudo yum update
   sudo yum -y install --enablerepo=remi,remi-php73 php php-devel php-mbstring php-pdo php-gd php-xml php-mcrypt php-intl
   sudo yum -y install zip unzip git

  php -v

  # PostgreSQL
  echo --INSTALL PostgreSQL--
  sudo yum -y install postgresql-server postgresql-setup initdb
  sudo yum -y install --enablerepo=remi-php73 php-pgsql
  psql --version

  # ファイアウォールの停止
  echo --STOP FIREWALL--
  sudo -s
  systemctl disable firewalld

  # Composer
  echo --INSTALL Composer--
  php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"
  php composer-setup.php
  php -r "unlink('composer-setup.php');"
  mv composer.phar /usr/local/bin/composer
  composer


  # apache起動
  echo --START APACHE SERVER--
  sudo -s
  systemctl start httpd.service

  SHELL

end