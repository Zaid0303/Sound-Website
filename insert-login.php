<?php 
include('config.php');

if(isset($_POST['login'])){
    $login_email =  $_POST['email'];
    $login_pass = $_POST['pass'];

    $verify_email = "SELECT * FROM `users` where `u_email` = '$login_email'";
    $verify_result = mysqli_query($connection, $verify_email);
    if($verify_result){
        if(mysqli_num_rows($verify_result) == 1){
            $row = mysqli_fetch_assoc($verify_result);
            $dbpass = $row['u_password'];
            $verify_pass = password_verify($login_pass, $dbpass);
            if( $verify_pass){
                $_SESSION['status'] = 'Login successful';
                $_SESSION['status_code'] = 'success';
                header('location: login.php');
                // echo "<script> 
                // // swal('Login successful!', 'You clicked the button!', 'success');
                // // alert('Login successful');
                // window.location.href='../index.php'
                // </script>";
            }else {
                $_SESSION['status'] = 'Invalid Password';
                $_SESSION['status_code'] = 'error';
                header('location: login.php');
                // echo "<script> 
                // alert('Invalid Password');
                // window.location.href='sign-in.php'
                // </script>";
            }
        } else {
            $_SESSION['status'] = 'Invalid Email';
            $_SESSION['status_code'] = 'error';
            header('location: login.php');
            // echo "<script> 
            // alert('Invalid Email');
            // window.location.href='sign-in.php'
            // </script>";
        }
    } 

}
?>