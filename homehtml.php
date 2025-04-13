<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SaveMyContact</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

</head>
<body>
    <header class="p-3 sticky-top header bg-dark text-light">
        <div class="row">
            <div class="col">
                <h1>SaveMyContact</h1>
            </div>
            <div class="col-12 col-sm-6 d-flex justify-content-star justify-content-sm-end mt-2">
                <nav>
                    <ul class="list-inline">
                        <li class="list-inline-item">
                            <a class="text-decoration-none text-light me-3" href="#">Logout</a>
                        </li>
                    </ul>
                </nav>      
            </div>
        </div>
    </header>

    <div class="row mt-4 justify-content-center mx-4">
        <div class="col-md-6 col-lg-4">
            <form class="d-flex" id="searchForm" action="" method="">
                <div class="input-group">
                    <input class=" search-box form-control" id="searchInput" type="search" name="search" placeholder="Search Contacts">
                    <button class="btn btn-primary" type="submit">
                        <i class="fas fa-search"></i>
                    </button>
                </div>
            </form>
        </div>
    </div>

    <div class="container mt-5">
        <div class="row gx-3" id="main-box">
            <div class="col-12 col-sm-12 col-md-6 col-lg-4 col-xl-4 col-xxl-3 my-3">
                <div class="card shadow ">
                    <div class="card-body">
                        <h4>Name:</h4>
                        <p>UNICEF Global Helpdesk</p><hr>

                        <h4>Phone Number:</h4>
                        <p>+1-212-326-7000</p><hr>

                        <h4>Email:</h4>
                        <p>info@unicef.org</p><hr>

                        <h4>Address:</h4>
                        <p>UNICEF HQ, New York, USA</p><hr>

                    </div>
                </div>
            </div>   
        </div>
    </div>

    <div class=" button-plus-div d-flex justify-content-end sticky-top">
        <button class=" button-plus btn btn-lg btn-primary rounded-circle position-fixed m-3" onclick="show()">
            <i class="fa fa-plus"></i>
        </button>
    </div>
    
    <footer class="bg-dark text-white py-4 mt-5">
        <div class="container">
            <div class="row">
                
                <div class="col-12 col-md-4 mb-3">
                    <h5>Contact Us</h5>
                    <p>Email: SaveMyContact@gmail.com</p>
                    <p>Phone: 0701234567</p>
                    <p>Address: 123 Main Street, Jaffna</p>
                </div>
                
                
                <div class="col-12 col-md-4 mb-3">
                    <h5>Quick Links</h5>
                    <ul class="list-unstyled">
                        <li><a href="#" class="text-decoration-none text-white">About Us</a></li>
                        <li><a href="#" class="text-decoration-none text-white">Privacy Policy</a></li>
                        <li><a href="#" class="text-decoration-none text-white">Terms & Conditions</a></li>
                        <li><a href="#" class="text-decoration-none text-white">Help</a></li>
                    </ul>
                </div>
    
                
                <div class="col-12 col-md-4">
                    <h5>Follow Us</h5>
                    <ul class="list-unstyled ">
                        <li><a href="#" class="text-decoration-none text-white mx-2"><i class="fa-brands fa-facebook"></i></a></li>
                        <li><a href="#" class="text-decoration-none text-white mx-2"><i class="fa-brands fa-twitter"></i></a></li>
                        <li><a href="#" class="text-decoration-none text-white mx-2"><i class="fa-brands fa-instagram"></i></a></li>
                        <li><a href="#" class="text-decoration-none text-white mx-2"><i class="fa-brands fa-linkedin"></i></a></li>
                    </ul>
                </div>
            </div>
            
            <div class="row mt-3">
                <div class="col-12 text-center">
                    <hr class="bg-light">
                    <p class="mb-0">2025 SaveMyContact. All Rights Reserved.</p>
                </div>
            </div>
        </div>
    </footer>
    
    <div class="overlay bg-dark w-100 h-100 top-0 start-0 bottom-0 p-0 m-0 position-fixed"></div>

    <div class=" popup-box container">
        <div class="row d-flex justify-content-center">
            <div class="col-12 col-md-6 card p-2">
                <h3>Enter Contact Details</h3>
                <form action="index.php" method="post">
                    <div class="form-group mb-2">
                        <label for="">Name:</label>
                        <input id="in_name" class="form-control" type="text" name="name" placeholder="Enter The name" maxlength="50">
                        <div class="error text-danger"></div>
                    </div>
                    <div class="form-group mb-2">
                        <label for="">Phone Number:</label>
                        <input id="in_pnum" class="form-control" type="tel" name="phonenumber" placeholder="Enter The PhoneNumber" minlength="7" maxlength="15">
                        <div class="error text-danger"></div>
                    </div>
                    <div class="form-group mb-2">
                        <label for="">Email:</label>
                        <input id="in_email" class="form-control" type="email" name="email" placeholder="Enter The Email (optional)" maxlength="50">
                        <div class="error text-danger"></div>
                    </div>
                    <div class="form-group mb-1">
                        <label for="">Address:</label>
                        <input id="in_address" class="form-control" type="text" name="address" placeholder="Enter The Address (optional)" maxlength="50">
                    </div>
                    <button class="btn btn-primary mt-3 me-3" type="submit" name="submit">Save</button>
                    <button class="btn btn-primary mt-3 ms-3" type="button" onclick="cancel()">Cancel</button>
                </form>
            </div>
        </div>    
    </div>
    <div class=" are-you-sure container">
        <div class="row d-flex justify-content-center">
            <div class="col-6 col-md-3 card p-2 bg-dark text-light">
                <h3>Delete Contact?</h3>
                <button class="btn btn-primary mt-3 mx-3" onclick="delete_yes()">Delete</button>
                <button class="btn btn-primary mt-3 mx-3" onclick="hide_are_you_sure()">Cancel</button>
            </div>
        </div>    
    </div>
    
    
    <script src="script.js"></script>
</body>
</html>