<?php


    $error = [
        'firstNameError' => '',
        'lastNameError' => '',
        'emailError' => '',
    ];
    
    if(isset($_POST["submit"])){
                $firstName = mysqli_real_escape_string($conn, $_POST["firstName"]);
                $lastName = mysqli_real_escape_string($conn, $_POST["lastName"]);
                $email = mysqli_real_escape_string($conn, $_POST["email"]);
                

                $sql = "INSERT INTO users (firstName, lastName, email) 
                        VALUES ('$firstName', '$lastName', '$email')";

                if(empty($firstName)||empty($lastName)||empty($email)){
                    
                    if(empty($firstName)){
                        $error ['firstNameError'] = 'Please Enter Your First Name';
                    }

                    if(empty($lastName)){
                        $error ['lastNameError'] = 'Please Enter Your Last Name';
                    }
                    
                    if(empty($email)){
                        $error ['emailError'] = 'Please Enter Your email';
                    }
                }
                
                elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)){
                    $error ['emailError'] = 'Please Enter a Valid e-mail address';
                }
                elseif(mysqli_query($conn, $sql)){
                    header('location: ' . $_SERVER['PHP_SELF']);
                }
                else{
                    echo 'Error :'. mysqli_error($conn);
                }
                
    }