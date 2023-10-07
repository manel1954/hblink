#!/bin/bash
                        sudo sed -i "622c ENABLED: True" /opt/HBlink3/hblink.cfg 
                        
                        line80=$(awk "NR==80" /opt/HBlink3/rules.py)
                        line80=${line80#"#"} #borra la primera letra de la variable
                        sudo sed -i "80c $line80" /opt/HBlink3/rules.py
                        
                        line81=$(awk "NR==81" /opt/HBlink3/rules.py)
                        line81=${line81#"#"} #borra la primera letra de la variable
                        sudo sed -i "81c $line81" /opt/HBlink3/rules.py
                        
                        line82=$(awk "NR==82" /opt/HBlink3/rules.py)
                        line82=${line82#"#"} #borra la primera letra de la variable
                        sudo sed -i "82c $line82" /opt/HBlink3/rules.py
                        
                        line83=$(awk "NR==83" /opt/HBlink3/rules.py)
                        line83=${line83#"#"} #borra la primera letra de la variable
                        sudo sed -i "83c $line83" /opt/HBlink3/rules.py

                        sudo sed -i "6c REGLA6=ON" /var/www/html/hblink/status_reglas.cfg                        

                        sudo systemctl restart hbmon
                        sudo systemctl restart hblink                       