<?php
session_start();
    include("database.php");
    $error="";

    if(isset($_POST["submit"])){
        $email=$_POST["email"];
        $password=$_POST["password"];
        
            $stmt=$conn->prepare("select * from users where email=(?)");
            $stmt->bind_param("s",$email);
            $stmt->execute();
            $result=$stmt->get_result();
        
            if($result->num_rows>0){
                $row=$result->fetch_assoc();
                $hash_password=$row["password"];
        
                if(password_verify($password,$hash_password)){
                    header("Location: home.php");
                    exit();
                }else{
                    $_SESSION["error"]="incorrect password";
                }
            }
    }
    include("signinhtml.php");
?>