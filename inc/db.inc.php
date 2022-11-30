<?php
    $conn = mysqli_connect('localhost', 'root', 'R0b@t5657', 'BDMS');
    
    if (!$conn) {
        echo 'FATAL ERROR!!!!';
    } else {
        echo 'You are in :)';
    }