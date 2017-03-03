if [ -e /vagrant/backup/db.sql ]
  then
    sudo mysql -p'yourpassword' -e "CREATE DATABASE IF NOT EXISTS wordpress;"
    sudo mysql -p'yourpassword' wordpress  < /vagrant/backup/db.sql
    echo "imported db..."
fi
