#!/bin/bash
                        sudo sed -i "722c ENABLED: True" /opt/HBlink3/hblink.cfg 

                        line90=$(awk "NR==90" /opt/HBlink3/rules.py)
                        line90=${line90#"#"} #borra la primera letra de la variable
                        sudo sed -i "90c $line90" /opt/HBlink3/rules.py
                        
                        line91=$(awk "NR==91" /opt/HBlink3/rules.py)
                        line91=${line91#"#"} #borra la primera letra de la variable
                        sudo sed -i "91c $line91" /opt/HBlink3/rules.py
                        
                        line92=$(awk "NR==92" /opt/HBlink3/rules.py)
                        line92=${line92#"#"} #borra la primera letra de la variable
                        sudo sed -i "92c $line92" /opt/HBlink3/rules.py
                        
                        line93=$(awk "NR==93" /opt/HBlink3/rules.py)
                        line93=${line93#"#"} #borra la primera letra de la variable
                        sudo sed -i "93c $line93" /opt/HBlink3/rules.py

                        sudo sed -i "7c REGLA7=ON" /var/www/html/hblink/status_reglas.cfg                        

                        sudo systemctl restart hbmon
                        sudo systemctl restart hblink