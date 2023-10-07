<?php 
 exec("sudo systemctl restart hbmon");
 exec("sudo systemctl restart hblink");
header("Location:http://51.254.97.10:7010");
