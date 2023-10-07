##!/bin/bash

tgi1=$(awk "NR==820"  /opt/HBlink3/hblink.cfg)

tgi=`expr substr $tgi1 2 4`
tgc=`expr substr $tgi1 2 4`
tgd=`expr substr $tgi1 2 4`
desconecta="8"
tgd=$desconecta$tgd

sudo sed -i "102c {'SYSTEM': 'MASTER', 'TS': 2, 'TGID': $tgi, 'ACTIVE': True, 'TIMEOUT': 2, 'TO_TYPE': 'NONE',  'ON': [$tgc], 'OFF': [$tgd], 'RESET': []}," /opt/HBlink3/rules.py

sudo systemctl restart hbmon
sudo systemctl restart hblink