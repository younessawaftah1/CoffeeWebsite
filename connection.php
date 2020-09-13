<?php
// connect to DB
    $con = mysqli_connect("localhost","root","","cofeedb");
    if(!$con){
        die("cannot connect to server");
    }
    ?>