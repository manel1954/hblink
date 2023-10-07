#!/bin/bash
                        sudo sed -i "922c ENABLED: True" /opt/HBlink3/hblink.cfg 

                        line110=$(awk "NR==110" /opt/HBlink3/rules.py)
                        line110=${line110#"#"} #borra la primera letra de la variable
                        sudo sed -i "110c $line110" /opt/HBlink3/rules.py
                        
                        line111=$(awk "NR==111" /opt/HBlink3/rules.py)
                        line111=${line111#"#"} #borra la primera letra de la variable
                        sudo sed -i "111c $line111" /opt/HBlink3/rules.py
                        
                        line112=$(awk "NR==112" /opt/HBlink3/rules.py)
                        line112=${line112#"#"} #borra la primera letra de la variable
                        sudo sed -i "112c $line112" /opt/HBlink3/rules.py
                        
                        line113=$(awk "NR==113" /opt/HBlink3/rules.py)
                        line113=${line113#"#"} #borra la primera letra de la variable
                        sudo sed -i "113c $line113" /opt/HBlink3/rules.py

                        sudo sed -i "9c REGLA9=ON" /var/www/html/hblink/status_reglas.cfg                        

                        sudo systemctl restart hbmon
                        sudo systemctl restart hblink                        