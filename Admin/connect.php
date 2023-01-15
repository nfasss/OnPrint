<?php

$con = new mysqli('localhost', 'root', '', 'printing');

if(!$con){
    echo "Connection sucessfull";   
} else{
    die(mysqli_error($con));
}
?>