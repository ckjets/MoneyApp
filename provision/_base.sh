echo -------------------------------------------------
echo
echo                ファイアウォール 無効化
echo
echo -------------------------------------------------

systemctl disable firewalld

echo -------------------------------------------------
echo
echo                    SELinux 無効化
echo
echo -------------------------------------------------

setenforce 0
sed -i 's/SELINUX=enforcing/SELINUX=disabled/' /etc/selinux/config
