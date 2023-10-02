<?php
$conn = mysqli_connect('localhost', 'root', '', 'landing_page');

    if(!$conn){
        echo "Error : " . mysqli_connect_error();
    }