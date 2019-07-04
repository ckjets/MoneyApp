echo -------------------------------------------------
echo ファイアウォール設定
echo -------------------------------------------------

systemctl start firewalld
firewall-cmd --add-service=http --zone=public --permanent
firewall-cmd --reload

echo -------------------------------------------------
echo SELinux無効化
echo -------------------------------------------------

setenforce 0
sed -i 's/SELINUX=enforcing/SELINUX=disabled/' /etc/selinux/config
