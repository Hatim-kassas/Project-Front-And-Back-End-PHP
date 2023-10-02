<?php    
    
    $sql_data_users = 'SELECT * FROM users ORDER BY RAND() LIMIT 1';
    $result = mysqli_query($conn, $sql_data_users);
    $users = mysqli_fetch_all($result, MYSQLI_ASSOC);
