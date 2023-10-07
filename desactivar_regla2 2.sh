#!/bin/bash
                        sudo sed -i "222c ENABLED: False" /opt/HBlink3/hblink.cfg # OJO CAMBIAR POR SU NUMERO ********

                        line40=$(awk "NR==40" /opt/HBlink3/rules.py)
                        sudo sed -i "40c #$line40" /opt/HBlink3/rules.py

                        line41=$(awk "NR==41" /opt/HBlink3/rules.py)
                        sudo sed -i "41c #$line41" /opt/HBlink3/rules.py

                        line42=$(awk "NR==42" /opt/HBlink3/rules.py)
                        sudo sed -i "42c #$line42" /opt/HBlink3/rules.py

                        line43=$(awk "NR==43" /opt/HBlink3/rules.py)
                        sudo sed -i "43c #$line43" /opt/HBlink3/rules.py

                        sudo sed -i "2c REGLA2=OFF" /var/www/html/hblink/status_reglas.cfg 

                        sudo systemctl restart hbmon
                        sudo systemctl restart hblink                        
                        