<?php
    include './inc/db_connect.php';
    include './inc/db_form.php';
    include './inc/db_select.php';
    include './inc/db_close.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/cdn.jsdelivr.net_npm_bootstrap@5.3.2_dist_css_bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link href="style.css" rel="stylesheet">
    <title>Document</title>
</head>
<body>
    
    <div class="container">
        <div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-body-tertiary">
            <div class="col-md-6 p-lg-5 mx-auto my-5">
                <h1 class="display-6 fw-bold">Download the book Learn the Basics of Technical Analysis</h1>
                <h3 class="fw-normal text-muted mb-3">Please enter your email to receive the book </h3>
                    <div class="d-flex gap-3 justify-content-center lead fw-normal">
                        <a class="icon-link" href="#">
                        Learn more
                        <svg class="bi"><use xlink:href="#chevron-right"></use></svg>
                        </a>
                        <a class="icon-link" href="#">
                        Buy
                        <svg class="bi"><use xlink:href="#chevron-right"></use></svg>
                        </a>
                    </div>
                    <div class="pt-3">
                        <p>Remaining To Close Registration</p>
                    </div>
                    <p id="countdown"></p>
            </div>
        </div>

        <form action="<?php $_SERVER['PHP_SELF']?>" method="post" class="mt-5">
            <div class="mb-3">
                <label for="firstName" class="form-label">First Name</label>
                <input type="text" name="firstName" class="form-control" id="firstName" value="<?php echo isset($firstName) ? $firstName : '' ?>">
                <div id="emailHelp" class="form-text error"><?php echo $error ['firstNameError']?></div>
            </div>
            <div class="mb-3">
                <label for="lastName" class="form-label">Last Name</label>
                <input type="text" name="lastName" class="form-control" id="lastName" value="<?php echo isset($lastName) ? $lastName : ''?>">
                <div id="emailHelp" class="form-text error"><?php echo $error ['lastNameError']?></div>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="text" name="email" class="form-control" id="email" value="<?php echo isset($email)? $email : ''?>">
                <div id="emailHelp" class="form-text error"><?php echo $error ['emailError']?></div>
            </div>
            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
        </form>
        
            <div class="d-grid gap-2 col-2 mx-auto">
                <button id="btn" class="btn btn-primary" type="button">Click To Select The Winner</button>
            </div>
            
            <div class="row" id="card">
                <?php foreach($users as $user): ?>
                    <div class="col-sm-6">
                        <div class="card my-2 bg-light">
                            <div class="card-body">
                                <h5><?php echo htmlspecialchars($user['firstName']) .' '. htmlspecialchars($user['lastName']);?></h5>
                                <p><?php echo htmlspecialchars($user['email']); ?></p>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>  
    </div>

    <script src="js/cdn.jsdelivr.net_npm_bootstrap@5.3.2_dist_js_bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
    <script src="./js/main.js"></script>
</body>
</html>


