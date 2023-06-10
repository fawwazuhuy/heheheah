<?php
    $connection= new mysqli("localhost","root","","website");

    if(!$connection){
        die(mysqli_error($connection));
    }

    ?>