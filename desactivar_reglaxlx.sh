#!/bin/bash
                        sudo sed -i "1022c ENABLED: False" /opt/HBlink3/hblink.cfg 

                        line120=$(awk "NR==120" /opt/HBlink3/rules.py)
                        sudo sed -i "120c #$line120" /opt/HBlink3/rules.py

                        line121=$(awk "NR==121" /opt/HBlink3/rules.py)
                        sudo sed -i "121c #$line121" /opt/HBlink3/rules.py

                        line122=$(awk "NR==122" /opt/HBlink3/rules.py)
                        sudo sed -i "122c #$line122" /opt/HBlink3/rules.py

                        line123=$(awk "NR==123" /opt/HBlink3/rules.py)
                        sudo sed -i "123c #$line123" /opt/HBlink3/rules.py

                        line124=$(awk "NR==124" /opt/HBlink3/rules.py)
                        sudo sed -i "124c #$line124" /opt/HBlink3/rules.py

                        sudo sed -i "10c REGLA10=OFF" /var/www/html/hblink/status_reglas.cfg

                        sudo systemctl restart hbmon
                        sudo systemctl restart hblink
