# -*- mode: ruby -*-
# vi: set ft=ruby :

# A Vagrantfile to set up two VMs, a webserver and a database server,
# connected together using an internal network with manually-assigned
# IP addresses for the VMs.

Vagrant.configure("2") do |config|
  # (We have used this box previously, so reusing it here should save a
  # bit of time by using a cached copy.)
  config.vm.box = "ubuntu/xenial64"

  # this is a form of configuration not seen earlier in our use of
  # Vagrant: it defines a particular named VM, which is necessary when
  # your Vagrantfile will start up multiple interconnected VMs. I have
  # called this first VM "webserver" since I intend it to run the
  # webserver (unsurprisingly...).
  config.vm.define "webserver" do |webserver|
    # These are options specific to the webserver VM
    webserver.vm.hostname = "webserver"
    
    # This type of port forwarding has been discussed elsewhere in
    # labs, but recall that it means that our host computer can
    # connect to IP address 127.0.0.1 port 8080, and that network
    # request will reach our webserver VM's port 80.
    webserver.vm.network "forwarded_port", guest: 80, host: 8080, host_ip: "127.0.0.1"
    
    # We set up a private network that our VMs will use to communicate
    # with each other. Note that I have manually specified an IP
    # address for our webserver VM to have on this internal network,
    # too. There are restrictions on what IP addresses will work, but
    # a form such as 192.168.2.x for x being 11, 12 and 13 (three VMs)
    # is likely to work.
    webserver.vm.network "private_network", ip: "192.168.2.11"

    # This following line is only necessary in the CS Labs... but that
    # may well be where markers mark your assignment.
    webserver.vm.synced_folder ".", "/vagrant", owner: "vagrant", group: "vagrant", mount_options: ["dmode=775,fmode=777"]

    # Now we have a section specifying the shell commands to provision
    # the webserver VM. Note that the file test-website.conf is copied
    # from this host to the VM through the shared folder mounted in
    # the VM at /vagrant
    webserver.vm.provision "shell", inline: <<-SHELL
      apt-get update
      apt-get install -y apache2 php libapache2-mod-php php-mysql
      cp /vagrant/test-website.conf /etc/apache2/sites-available/
      a2ensite test-website
      a2dissite 000-default
      service apache2 reload
    SHELL
  end

  # Here is the section for defining the database server, which I have
  # named "dbserver".
  config.vm.define "dbserver" do |dbserver|
    dbserver.vm.hostname = "dbserver"
    dbserver.vm.network "private_network", ip: "192.168.2.12"
    dbserver.vm.synced_folder ".", "/vagrant", owner: "vagrant", group: "vagrant", mount_options: ["dmode=775,fmode=777"]
    
    dbserver.vm.provision "shell", inline: <<-SHELL
      apt-get update
      export MYSQL_PWD='insecure_mysqlroot_pw'
      echo "mysql-server mysql-server/root_password password $MYSQL_PWD" | debconf-set-selections 
      echo "mysql-server mysql-server/root_password_again password $MYSQL_PWD" | debconf-set-selections
      apt-get -y install mysql-server
      echo "CREATE DATABASE timezones;" | mysql
      echo "CREATE USER 'webuser'@'%' IDENTIFIED BY 'insecure_db_pw';" | mysql
      echo "GRANT ALL PRIVILEGES ON timezones.* TO 'webuser'@'%'" | mysql
      export MYSQL_PWD='insecure_db_pw'
      cat /vagrant/setup-database.sql | mysql -u webuser timezones
      sed -i'' -e '/bind-address/s/127.0.0.1/0.0.0.0/' /etc/mysql/mysql.conf.d/mysqld.cnf
      service mysql restart
    SHELL
  end

 # Here is the section for defining the converter server, which we have
  # named "conserver".
  config.vm.define "conserver" do |conserver|
    conserver.vm.hostname = "conserver"
    conserver.vm.network "private_network", ip: "192.168.2.13"
    conserver.vm.synced_folder ".", "/vagrant", owner: "vagrant", group: "vagrant", mount_options: ["dmode=775,fmode=777"]
 conserver.vm.network "forwarded_port", guest: 80, host: 8081, host_ip: "127.0.0.1"
    
    conserver.vm.provision "shell", inline: <<-SHELL
      # Update Ubuntu software packages.
      apt-get update
       apt-get install -y apache2 php libapache2-mod-php php-mysql
      cp /vagrant/converter-website.conf /etc/apache2/sites-available/
      a2ensite converter-website
      a2dissite 000-default
      service apache2 reload
    SHELL
  end

end

#  LocalWords:  webserver xenial64
