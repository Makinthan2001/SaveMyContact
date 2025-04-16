<?php
    session_start();
    include("database.php");
    $error="";

    if(isset($_POST["submit"])){
        $name=$_POST["name"];
        $email=$_POST["email"];
        $password=$_POST["password"];
        $hash=password_hash("$password",PASSWORD_DEFAULT);
        mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
        

        try{
            $stmt=$conn->prepare("insert into users (name,email,password)
                                  values (?,?,?)");
            $stmt->bind_param("sss",$name,$email,$hash);
        
            if($stmt->execute()){
                $_SESSION["$error"]="";
                header("Location: home.php");
                exit();
            }
        }
        catch(mysqli_sql_exception $e){
            if(str_contains($e->getMessage(),"Duplicate entry")){
                $_SESSION["error"]="Email is already taken";
            }else{
                $_SESSION["error"]="Something Went Wrong: ".$e->getMessage();
            }
        }finally{$stmt->close();}
    }

    include("signuphtml.php");
?>