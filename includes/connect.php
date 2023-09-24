<?php

$con=mysqli_connect('localhost','root','','petstore-db');
if(!$con){
    edie(mysqli_error($con));
}

?>