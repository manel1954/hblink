#!/bin/bash

                        sudo sed -i "822c ENABLED: False" /opt/HBlink3/hblink.cfg # OJO CAMBIAR POR SU NUMERO ********

                        line100=$(awk "NR==100" /opt/HBlink3/rules.py)
                        sudo sed -i "100c #$line100" /opt/HBlink3/rules.py

                        line101=$(awk "NR==101" /opt/HBlink3/rules.py)
                        sudo sed -i "101c #$line101" /opt/HBlink3/rules.py

                        line102=$(awk "NR==102" /opt/HBlink3/rules.py)
                        sudo sed -i "102c #$line102" /opt/HBlink3/rules.py

                        line103=$(awk "NR==103" /opt/HBlink3/rules.py)
                        sudo sed -i "103c #$line103" /opt/HBlink3/rules.py

                        sudo sed -i "8c REGLA8=OFF" /var/www/html/hblink/status_reglas.cfg

                        sudo systemctl restart hbmon
                        sudo systemctl restart hblink
