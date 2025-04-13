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
<body class="bg-light hv-100">
<header class="p-3 sticky-top header bg-dark text-light">
        <div class="row">
            <div class="col">
                <h1>SaveMyContact</h1>
            </div>
        </div>
    </header>

    <div class="row d-flex justify-content-center">
        <div class="signin col-12 col-sm-6 col-md-6 col-lg-4">
            <div class="card shadow">
                <div class="card-body shadow">
                    <h1>SIGNIN</h1>
                    <form onsubmit="return validation_signin()" action="" method="post">
                        <div class="form-group my-3">
                            <label for="email">Email:</label>
                            <input id="inemail" class="form-control" type="text" name="email" placeholder="Enter Your Email">
                            <div class="error"></div>
                        </div>
                        <div class="form-group my-3 position-relative">
                            <label for="inpassword">Password</label>
                            <input type="password" class="form-control" id="inpassword" placeholder="Enter Your Password" name="inpassword">
                            <i id="toggleSigninPass" class=" eye bi bi-eye-slash-fill position-absolute" onclick="togglePassword('inpassword', 'toggleSigninPass')"></i>
                            <div class="error"></div>
                        </div>
                        <input class="btn btn-primary my-2" type="submit" value="SIGNIN">
                        <button type="button" class="slidebutton btn ms-5" onclick="MoveToSignUp()">Don't Have an Account?</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="overlay bg-light w-100 h-100 top-0 start-0 bottom-0 p-0 m-0 position-fixed"></div>

    <div class="row d-flex justify-content-center">
        <div class="signup col-12 col-sm-6 col-md-6 col-lg-4">
            <div class="card shadow">
                <div class="card-body shadow">
                    <h1>SIGNUP</h1>
                    <form action="" onsubmit="return validation_signup()">
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
                        <input class="btn btn-primary my-2" type="submit" value="SIGNUP">
                        <button type="button" class="slidebutton btn ms-5" onclick="MoveToSignIn()">Already have an account?</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    
    <script src="sign.js"></script>
</body>
</html>