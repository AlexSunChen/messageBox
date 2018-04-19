#!/bin/sh
yum -y update
yum -y install mariadb-server
systemctl start mariadb
systemctl enable mariadb
yum -y install git
systemctl status mariadb
hostnamectl set-hostname DB
