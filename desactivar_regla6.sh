#!/bin/bash

                        sudo sed -i "622c ENABLED: False" /opt/HBlink3/hblink.cfg # OJO CAMBIAR POR SU NUMERO ********

                        line80=$(awk "NR==80" /opt/HBlink3/rules.py)
                        sudo sed -i "80c #$line80" /opt/HBlink3/rules.py

                        line81=$(awk "NR==81" /opt/HBlink3/rules.py)
                        sudo sed -i "81c #$line81" /opt/HBlink3/rules.py

                        line82=$(awk "NR==82" /opt/HBlink3/rules.py)
                        sudo sed -i "82c #$line82" /opt/HBlink3/rules.py

                        line83=$(awk "NR==83" /opt/HBlink3/rules.py)
                        sudo sed -i "83c #$line83" /opt/HBlink3/rules.py

                        sudo sed -i "6c REGLA6=OFF" /var/www/html/hblink/status_reglas.cfg

                        sudo systemctl restart hbmon
                        sudo systemctl restart hblink
