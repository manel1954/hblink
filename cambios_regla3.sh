##!/bin/bash
nombre=$(awk "NR==1" /var/www/html/hblink/status_regla3.cfg)
corchete1="["
corchete2="]"
nombrehblink=$corchete1$nombre$corchete2

DP=$(awk "NR==2" /var/www/html/hblink/status_regla3.cfg)
tgc=$(awk "NR==3" /var/www/html/hblink/status_regla3.cfg)
tgd=$(awk "NR==4" /var/www/html/hblink/status_regla3.cfg)
tgs=$(awk "NR==5" /var/www/html/hblink/status_regla3.cfg)

masterip=$(awk "NR==6" /var/www/html/hblink/status_regla3.cfg)
masterip1="MASTER_IP: "
masterip=$masterip1$masterip

puerto=$(awk "NR==7" /var/www/html/hblink/status_regla3.cfg)
puerto1="MASTER_PORT: "
puerto=$puerto1$puerto

password=$(awk "NR==8" /var/www/html/hblink/status_regla3.cfg)
password1="PASSPHRASE: "
password=$password1$password

options=$(awk "NR==9" /var/www/html/hblink/status_regla3.cfg)
options1="OPTIONS: "
options=$options1$options #OPTIONS: StartRef=4000;Relinktime=15;TS2_1=21465

sudo sed -i "320c $nombrehblink" /opt/HBlink3/hblink.cfg
sudo sed -i "327c $masterip" /opt/HBlink3/hblink.cfg
sudo sed -i "328c $puerto" /opt/HBlink3/hblink.cfg
sudo sed -i "329c $password" /opt/HBlink3/hblink.cfg
sudo sed -i "346c $options" /opt/HBlink3/hblink.cfg

sudo sed -i "51c '$nombre': [" /opt/HBlink3/rules.py
sudo sed -i "53c {'SYSTEM': '$nombre', 'TS': 2, 'TGID': $tgs, 'ACTIVE': True, 'TIMEOUT': 2, 'TO_TYPE': 'NONE',  'ON': [], 'OFF': [], 'RESET': []}," /opt/HBlink3/rules.py

if [ $DP = "Demanda" ]
then
sudo sed -i "52c {'SYSTEM': 'MASTER', 'TS': 2, 'TGID': $tgc, 'ACTIVE': False, 'TIMEOUT': 10, 'TO_TYPE': 'ON',  'ON': [$tgc], 'OFF': [$tgd], 'RESET': []}," /opt/HBlink3/rules.py
else
sudo sed -i "52c {'SYSTEM': 'MASTER', 'TS': 2, 'TGID': $tgc, 'ACTIVE': True, 'TIMEOUT': 2, 'TO_TYPE': 'NONE',  'ON': [$tgc], 'OFF': [$tgd], 'RESET': []}," /opt/HBlink3/rules.py
fi

#sudo systemctl restart hbmon
#sudo systemctl restart hblink


