#!/bin/bash
    sudo sed -i "422c ENABLED: True" /opt/HBlink3/hblink.cfg

    line60=$(awk "NR==60" /opt/HBlink3/rules.py)
    line60=${line60#"#"} #borra la primera letra de la variable
    sed -i "60c $line60" /opt/HBlink3/rules.py

    line61=$(awk "NR==61" /opt/HBlink3/rules.py)
    line61=${line61#"#"} #borra la primera letra de la variable
    sed -i "61c $line61" /opt/HBlink3/rules.py

    line62=$(awk "NR==62" /opt/HBlink3/rules.py)
    line62=${line62#"#"} #borra la primera letra de la variable
    sed -i "62c $line62" /opt/HBlink3/rules.py

    line63=$(awk "NR==63" /opt/HBlink3/rules.py)
    line63=${line63#"#"} #borra la primera letra de la variable
    sed -i "63c $line63" /opt/HBlink3/rules.py

    sudo sed -i "4c REGLA4=ON" /var/www/html/hblink/status_reglas.cfg

    sudo systemctl restart hbmon
    sudo systemctl restart hblink