sudo mkdir -p /vagrant/backup
echo "Backing up db..."
sudo mysqldump --add-drop-database -u root -p'yourpass' wordpress > /vagrant/backup/db.sql
echo "DB backup done."
