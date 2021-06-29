<?php
    $conn = mysqli_connect('localhost','root','','first_database');
    if(!$conn){
        echo 'Connection error: '. mysqli_connect_error();
    }
?> 

