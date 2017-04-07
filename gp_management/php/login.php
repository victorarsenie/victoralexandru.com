<?php 
session_start();
include 'db.php';

$username = $_POST["username"];
$password = md5($_POST["password"]);


$sql = "SELECT * from user_table WHERE username = '$username' AND password = '$password'";

$result = mysqli_query($con, $sql);
$row = mysqli_num_rows($result);

    if ($row==1) 
    {

    while($userData = mysqli_fetch_array($result)){

        
        
        $_SESSION['username'] = $username;

        $userType = $userData['login_type'];
        
        if ($userType == "staff") 
        {
            // staff has access to all login variables
            $_SESSION['login1'] = "valid";
            $_SESSION['login2'] = "valid";
            $_SESSION['login3'] = "valid";
            header("Location: index.html");
        } 
        else if ($userType =="doctor")
        {
            // doctor has access to one login variable
            $_SESSION['login2'] = "valid";
            header("Location: index.html");
        }
        else if ($userType =="patient")
        {
            // patient has access to one login variable
            $_SESSION['login3'] = "valid";
            header("Location: index.html");
        }
        

    }
}
    else 
    {

        header("Location: ../login.html");
    }


mysqli_close($con);


 ?>