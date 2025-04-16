<?php
    session_start();
    if (!isset($_SESSION["user_email"])) {
        header("Location: index.php");
        exit();
    }
    include("database.php");
    //include("homehtml.php");


    //if(isset($_SESSION["user_email"])){
        if(isset($_POST["logout"])){
            session_unset();
            session_destroy();
            header("Location:index.php");
            exit();
        }
    //}
    include("homehtml.php");

    /*if(isset($_POST["submit"])){
        mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

        $name=$_POST["name"];
        $phonenumber=$_POST["phonenumber"];
        $email=$_POST["email"];
        $address=$_POST["address"];

        $stmt = $conn->prepare("insert into contacts (name, p_num, email, address)
                                values (?, ?, ?, ?)");
        $stmt->bind_param("ssss",$name,$phonenumber,$email,$address);
        $stmt->execute();
        $stmt->close();
    }*/
?>