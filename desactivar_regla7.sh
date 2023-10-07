#!/bin/bash

                        sudo sed -i "722c ENABLED: False" /opt/HBlink3/hblink.cfg # OJO CAMBIAR POR SU NUMERO ********

                        line90=$(awk "NR==90" /opt/HBlink3/rules.py)
                        sudo sed -i "90c #$line90" /opt/HBlink3/rules.py

                        line91=$(awk "NR==91" /opt/HBlink3/rules.py)
                        sudo sed -i "91c #$line91" /opt/HBlink3/rules.py

                        line92=$(awk "NR==92" /opt/HBlink3/rules.py)
                        sudo sed -i "92c #$line92" /opt/HBlink3/rules.py

                        line93=$(awk "NR==93" /opt/HBlink3/rules.py)
                        sudo sed -i "93c #$line93" /opt/HBlink3/rules.py

                        sudo sed -i "7c REGLA7=OFF" /var/www/html/hblink/status_reglas.cfg

                        sudo systemctl restart hbmon
                        sudo systemctl restart hblink
