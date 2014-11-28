<?php
#Add your own params for mysqli_connect().
$link = mysqli_connect(server, username, password, database); 
    if (!$link){
        die("Could not connect");
    }

?>
