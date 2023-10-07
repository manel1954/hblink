#!/bin/bash
                        sudo sed -i "322c ENABLED: True" /opt/HBlink3/hblink.cfg 
 
                        line50=$(awk "NR==50" /opt/HBlink3/rules.py)
                        line50=${line50#"#"} #borra la primera letra de la variable
                        sudo sed -i "50c $line50" /opt/HBlink3/rules.py
                        
                        line51=$(awk "NR==51" /opt/HBlink3/rules.py)
                        line51=${line51#"#"} #borra la primera letra de la variable
                        sudo sed -i "51c $line51" /opt/HBlink3/rules.py
                        
                        line52=$(awk "NR==52" /opt/HBlink3/rules.py)
                        line52=${line52#"#"} #borra la primera letra de la variable
                        sudo sed -i "52c $line52" /opt/HBlink3/rules.py
                        
                        line53=$(awk "NR==53" /opt/HBlink3/rules.py)
                        line53=${line53#"#"} #borra la primera letra de la variable
                        sudo sed -i "53c $line53" /opt/HBlink3/rules.py

                        sudo sed -i "3c REGLA3=ON" /var/www/html/hblink/status_reglas.cfg                        

                        sudo systemctl restart hbmon
                        sudo systemctl restart hblink                         