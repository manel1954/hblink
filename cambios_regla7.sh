##!/bin/bash
nombre=$(awk "NR==1" /var/www/html/hblink/status_regla7.cfg)
corchete1="["
corchete2="]"
nombrehblink=$corchete1$nombre$corchete2

DP=$(awk "NR==2" /var/www/html/hblink/status_regla7.cfg)
tgc=$(awk "NR==3" /var/www/html/hblink/status_regla7.cfg)
tgd=$(awk "NR==4" /var/www/html/hblink/status_regla7.cfg)
tgs=$(awk "NR==5" /var/www/html/hblink/status_regla7.cfg)

masterip=$(awk "NR==6" /var/www/html/hblink/status_regla7.cfg)
masterip1="MASTER_IP: "
masterip=$masterip1$masterip

puerto=$(awk "NR==7" /var/www/html/hblink/status_regla7.cfg)
puerto1="MASTER_PORT: "
puerto=$puerto1$puerto

password=$(awk "NR==8" /var/www/html/hblink/status_regla7.cfg)
password1="PASSPHRASE: "
password=$password1$password

options=$(awk "NR==9" /var/www/html/hblink/status_regla7.cfg)
options1="OPTIONS: "
options=$options1$options #OPTIONS: StartRef=4000;Relinktime=15;TS2_1=21465

sudo sed -i "720c $nombrehblink" /opt/HBlink3/hblink.cfg
sudo sed -i "727c $masterip" /opt/HBlink3/hblink.cfg
sudo sed -i "728c $puerto" /opt/HBlink3/hblink.cfg
sudo sed -i "729c $password" /opt/HBlink3/hblink.cfg
sudo sed -i "746c $options" /opt/HBlink3/hblink.cfg

sudo sed -i "91c '$nombre': [" /opt/HBlink3/rules.py
sudo sed -i "93c {'SYSTEM': '$nombre', 'TS': 2, 'TGID': $tgs, 'ACTIVE': True, 'TIMEOUT': 2, 'TO_TYPE': 'NONE',  'ON': [], 'OFF': [], 'RESET': []}," /opt/HBlink3/rules.py

if [ $DP = "Demanda" ]
then
sudo sed -i "92c {'SYSTEM': 'MASTER', 'TS': 2, 'TGID': $tgc, 'ACTIVE': False, 'TIMEOUT': 10, 'TO_TYPE': 'ON',  'ON': [$tgc], 'OFF': [$tgd], 'RESET': []}," /opt/HBlink3/rules.py
else
sudo sed -i "92c {'SYSTEM': 'MASTER', 'TS': 2, 'TGID': $tgc, 'ACTIVE': True, 'TIMEOUT': 2, 'TO_TYPE': 'NONE',  'ON': [$tgc], 'OFF': [$tgd], 'RESET': []}," /opt/HBlink3/rules.py
fi

#sudo systemctl restart hbmon
#sudo systemctl restart hblink
