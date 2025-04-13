<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="sign.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
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
        <div class="signin col-12 col-sm-6 col-md-4">
            <div class="card shadow">
                <div class="card-body shadow">
                    <h1>SIGNIN</h1>
                    <button class="slidebutton btn position-absolute top-0 end-0 mt-4 me-3" onclick="MoveToSignUp()">Don't Have a Account</button>
                    <form onsubmit="return validation()" action="" method="post">
                        <div class="form-group my-3">
                            <label for="email">Email:</label>
                            <input id="inemail" class="form-control" type="email" name="email" placeholder="Enter Your Email">
                            <div class="error"></div>
                        </div>
                        <div class="form-group my-3">
                            <label for="password">Password:</label>
                            <input id="inpassword" class="form-control" type="password" name="password" placeholder="Enter Your Password">
                            <div class="error"></div>
                        </div>
                        <input class="btn btn-primary my-2" type="submit" value="SIGNIN">
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="overlay bg-light w-100 h-100 top-0 start-0 bottom-0 p-0 m-0 position-fixed"></div>

    <div class="row d-flex justify-content-center">
        <div class="signup col-12 col-sm-6 col-md-4">
            <div class="card shadow">
                <div class="card-body shadow">
                    <h1>SIGNUP</h1>
                    <button class="slidebutton btn position-absolute top-0 end-0 mt-4 me-3" onclick="MoveToSignIn()">Have a Account</button>
                    <form action="">
                    <div class="form-group my-3">
                            <label for="name">Name</label>
                            <input id="upname" class="form-control" type="text" name="name" placeholder="Enter Your Name">
                            <div class="error"></div>
                        </div>
                        <div class="form-group my-3">
                            <label for="email">Email</label>
                            <input id="upemail" class="form-control" type="email" name="email" placeholder="Enter Your Email">
                            <div class="error"></div>
                        </div>
                        <div class="form-group my-3">
                            <label for="password">Password</label>
                            <input id="uppassword" class="form-control" type="password" name="password" placeholder="Create Password">
                            <div class="error"></div>
                        </div>
                        <div class="form-group my-3">
                            <label for="c_password">Confirm Password</label>
                            <input id="upc_password" class="form-control" type="password" name="c_password" placeholder="Enter Again Password">
                            <div class="error"></div>
                        </div>
                        <input class="btn btn-primary my-2" type="button" value="SIGNIN">
                    </form>
                </div>
            </div>
        </div>
    </div>
    
    <script src="sign.js"></script>
</body>
</html>