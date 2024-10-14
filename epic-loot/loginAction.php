<?php
$con = mysqli_connect("localhost","root","","shop_db") or die(mysqli_error());
// mengaktifkan session pada php
session_start();

// menghubungkan php dengan koneksi database
include 'connection.php';

// menangkap data yang dikirim dari form login
$username = $_POST['username'];
$password = md5($_POST['password']);


// menyeleksi data user dengan username dan password yang sesuai
$login = mysqli_query($con,"select * from users where name='$username' and password='$password'");
// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($login);

// cek apakah username dan password di temukan pada database
if($cek > 0){
    $row = mysqli_fetch_assoc($login);
    // buat session login dan username
    if($row['user_type'] == 'admin'){

        $_SESSION['admin_name'] = $row['name'];
        $_SESSION['admin_email'] = $row['email'];
        $_SESSION['admin_id'] = $row['id'];
        header('location:main/admin_page.php');

    }elseif($row['user_type'] == 'user'){

        $_SESSION['username'] = $row['name'];
        $_SESSION['user_email'] = $row['email'];
        $_SESSION['user_id'] = $row['id'];
        header('location:index.php');

    }
}
else{
    header("location:login.php?login=failed");
}
?>