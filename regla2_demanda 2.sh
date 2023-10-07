##!/bin/bash

tgi1=$(awk "NR==220"  /opt/HBlink3/hblink.cfg)

tgi=`expr substr $tgi1 2 4` #4374
tgc=`expr substr $tgi1 2 4` #4374
tgd=`expr substr $tgi1 2 4` #4374
desconecta="8" #8
tgd=$desconecta$tgd #84374

sudo sed -i "42c {'SYSTEM': 'MASTER', 'TS': 2, 'TGID': $tgi, 'ACTIVE': False, 'TIMEOUT': 10, 'TO_TYPE': 'ON',  'ON': [$tgc], 'OFF': [$tgd], 'RESET': []}," /opt/HBlink3/rules.py

sudo systemctl restart hbmon
sudo systemctl restart hblink