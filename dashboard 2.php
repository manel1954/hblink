<?php 
 exec("sudo systemctl restart hbmon");
 exec("sudo systemctl restart hblink");
header("Location:http://54.36.190.79:7079");
