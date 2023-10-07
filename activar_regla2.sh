#!/bin/bash              
                        sudo sed -i "222c ENABLED: True" /opt/HBlink3/hblink.cfg 

                        line40=$(awk "NR==40" /opt/HBlink3/rules.py)
                        line40=${line40#"#"} #borra la primera letra de la variable
                        sudo sed -i "40c $line40" /opt/HBlink3/rules.py
                        
                        line41=$(awk "NR==41" /opt/HBlink3/rules.py)
                        line41=${line41#"#"} #borra la primera letra de la variable
                        sudo sed -i "41c $line41" /opt/HBlink3/rules.py
                        
                        line42=$(awk "NR==42" /opt/HBlink3/rules.py)
                        line42=${line42#"#"} #borra la primera letra de la variable
                        sudo sed -i "42c $line42" /opt/HBlink3/rules.py
                        
                        line43=$(awk "NR==43" /opt/HBlink3/rules.py)
                        line43=${line43#"#"} #borra la primera letra de la variable
                        sudo sed -i "43c $line43" /opt/HBlink3/rules.py
                        
                        sudo sed -i "2c REGLA2=ON" /var/www/html/hblink/status_reglas.cfg

                        sudo systemctl restart hbmon
                        sudo systemctl restart hblink                                          