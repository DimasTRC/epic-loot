<?php

$showAlert = false;
$showError = false;
$exists=false;
$con = mysqli_connect("localhost","root","","shop_db") or die(mysqli_error());

if($_SERVER["REQUEST_METHOD"] == "POST") {

    // Include file which makes the
    // Database Connection.
    include 'connection.php';

    $username = $_POST["username"];
    $password = $_POST["password"];
    $email = $_POST["email"];


    $sql = "SELECT * FROM users WHERE name='$username'";

    $result = mysqli_query($con, $sql);

    $num = mysqli_num_rows($result);

    // This sql query is use to check if
    // the username is already present
    // or not in our Database
    if($num == 0) {
        if($exists==false) {

            $hash = md5($password);

            // Password Hashing is used here.
            $sql = "INSERT INTO `users` ( `name`,  
                `password`, `email`) VALUES ('$username',  
                '$hash', '$email')";

            $result = mysqli_query($con, $sql);

            if ($result) {
                $showAlert = true;
            }
        }
        else {
            $showError = "Error";
        }
    }// end if

    if($num>0)
    {
        $exists="Username not available";
    }

}//end if

if($showAlert) {
    header("Location: login.php?register=success");
    echo ' <div class="alert alert-success  
            alert-dismissible fade show" role="alert"> 
    
            <strong>Success!</strong> Your account is  
            now created and you can login.  
            <button type="button" class="close"
                data-dismiss="alert" aria-label="Close">  
                <span aria-hidden="true">×</span>  
            </button>  
        </div> ';
}

if($showError) {
    header("Location: login.php?register=error");
    echo ' <div class="alert alert-danger  
            alert-dismissible fade show" role="alert">  
        <strong>Error!</strong> '. $showError.'
    
       <button type="button" class="close" 
            data-dismiss="alert aria-label="Close"> 
            <span aria-hidden="true">×</span>  
       </button>  
     </div> ';
}

if($exists) {
    header("Location: login.php?register=exists");
    echo ' <div class="alert alert-danger  
            alert-dismissible fade show" role="alert"> 
    
        <strong>Error!</strong> '. $exists.'
        <button type="button" class="close" 
            data-dismiss="alert" aria-label="Close">  
            <span aria-hidden="true">×</span>  
        </button> 
       </div> ';
}

?>