#! /bin/bash

sudo systemctl stop hbmon

cd /opt

rm -R HBmonitor

cp -R HBmonitor_CLARO HBmonitor

chmod 777 -R HBmonitor

sudo systemctl restart hbmon
sudo systemctl restart hblink