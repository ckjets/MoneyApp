Vagrant.configure("2") do |config|
  config.vm.box = "centos/7"
  config.vm.network "private_network", ip: "192.168.33.10"
  config.vm.synced_folder ".", "/app"
  # cfg.vm.provision :shell, path: "bootstrap.sh"
  config.vm.provision :install, type: "shell", path: "provision/install.sh"
  config.vm.provision :vagrant_user, type: "shell", path: "provision/vagrant_user.sh", privileged: false

  config.vm.provider :virtualbox do |vb|
    vb.customize ["modifyvm", :id, "--audio", "none"]
  end
end
