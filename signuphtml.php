<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
$error = $_SESSION["error"] ?? "";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="sign.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

</head>
<body class="bg-light">
<header class="p-3 sticky-top header bg-dark text-light">
        <div class="row">
            <div class="col">
                <h1>SaveMyContact</h1>
            </div>
        </div>
    </header>


    <div class="row d-flex justify-content-center">
        <div class="signup col-12 col-sm-6 col-md-6 col-lg-4">
            <div class="card shadow">
                <div class="card-body shadow">
                    <h1>SIGNUP</h1>
                    <form action="signup.php" method="post" onsubmit="return validation_signup()">
                    <div class="form-group my-3">
                            <label for="name">Name</label>
                            <input id="upname" class="form-control" type="text" name="name" placeholder="Enter Your Name" maxlength="50">
                            <div class="error"></div>
                        </div>
                        <div class="form-group my-3">
                            <label for="email">Email</label>
                            <input id="upemail" class="form-control" type="text" name="email" placeholder="Enter Your Email">
                            <div class="error"></div>
                        </div>
                        <div class="form-group my-3 position-relative">
                            <label for="uppassword">Password</label>
                            <input type="password" class="form-control" id="uppassword" placeholder="Create Password" name="password">
                            <i id="toggleUpPass" class=" eye bi bi-eye-slash-fill position-absolute" onclick="togglePassword('uppassword', 'toggleUpPass')"></i>
                            <div class="error"></div>
                        </div>
                        <div class="form-group my-3 position-relative">
                            <label for="c_password">Confirm Password</label>
                            <input id="upc_password" class="form-control" type="password" name="c_password" placeholder="Confirm Password">
                            <i id="toggleUpCPass" class=" eye bi bi-eye-slash-fill position-absolute" onclick="togglePassword('upc_password', 'toggleUpCPass')"></i>
                            <div class="error"></div>
                        </div>
                        <input class="btn btn-primary my-2" type="submit" name="submit" value="SIGNUP">
                        <p class="error mt-1">
                            <?php 
                                if(isset($error)){
                                    echo $error;
                                    unset($_SESSION["error"]);
                                }
                            ?>
                        </p>
                        <a class="slidebutton text-decoration-none" href="signinhtml.php">Already have an account?</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
    
    <script src="sign.js"></script>
</body>
</html>