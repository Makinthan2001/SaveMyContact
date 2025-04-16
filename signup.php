<?php
    include("signuphtml.php");
    include("database.php");

    if(isset($_POST["submit"])){
        $name=$_POST["name"];
        $email=$_POST["email"];
        $password=$_POST["password"];
        $hash=password_hash("$password",PASSWORD_DEFAULT);
    
        $stmt=$conn->prepare("insert into users (name,email,password)
                              values (?,?,?)");
        $stmt->bind_param("sss",$name,$email,$hash);
    
        if($stmt->execute()){
            header("Location: home.php");
            exit();
        }
    }
?>