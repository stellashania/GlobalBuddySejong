<?php
include('config/constants.php');

//check whether the submit button is clicked or not
if (isset($_POST['submit'])) {
    //1. get the data from login form
    $user_email = $_POST['email'];
    $user_password = md5($_POST['password']);

    //2. SQL to check whether the user with email and password exists or not
    $sql = "SELECT * FROM user WHERE email='$user_email' AND user_password='$user_password'";

    //3. execute the query
    $res = mysqli_query($conn, $sql);

    //4. count rows to check whether the user exists or not
    $count = mysqli_num_rows($res);

    if ($count == 1) {
        //user is available and login success

        //to check whether admin user is logged in or not and will be unset when admin user has log out
        $_SESSION['user_email'] = $user_email;

        //redirect to home page/dashboard
        echo '<script>alert("Login successful!")</script>';
        echo '<script>window.location="index.html"</script>';
    } else {
        //user not available and login fail
        echo '<script>alert("Login failed, please try again!")</script>';
        echo '<script>window.location="login.php"</script>';
    }
}
