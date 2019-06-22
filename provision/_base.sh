echo -------------------------------------------------
echo
echo                ファイアウォール 設定
echo
echo -------------------------------------------------

systemctl start firewalld
firewall-cmd --add-service=http --zone=public --permanent
firewall-cmd --reload

echo -------------------------------------------------
echo
echo                    SELinux 無効化
echo
echo -------------------------------------------------

setenforce 0
sed -i 's/SELINUX=enforcing/SELINUX=disabled/' /etc/selinux/config
