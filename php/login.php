<?php
session_start();
if(isset($_POST['username']) && isset($_POST['password'])){
    $user = $_POST['username'];
    $pass = $_POST['password'];
    
    // Demo credentials
    if($user === 'admin' && $pass === 'admin123'){
        $_SESSION['user'] = 'admin';
        header("Location: ../index.html");
        exit();
    } else {
        echo "<p style='color:red; text-align:center;'>Invalid username or password</p>";
    }
}
?>
