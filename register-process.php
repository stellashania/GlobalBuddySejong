<?php
include('config/constants.php');

if (isset($_POST['submit'])) {
    // submit button is clicked

    // 1. get the data from form
    $name = $_POST['name'];
    $password = md5($_POST['password']); //password encryption with md5
    $gender = $_POST['gender'];
    $student_id = $_POST['student_id'];
    $major = $_POST['major'];
    $email = $_POST['email'];
    $phone_number = $_POST['number'];
    $kakao_id = $_POST['kakao'];

    // 2. sql query to save the data into database
    $sql = "INSERT INTO user SET
        fullname = '$name',
        user_password = '$password',
        gender = '$gender',
        student_id = '$student_id',
        major = '$major',
        email = '$email',
        phone_number = '$phone_number',
        kakao_id = '$kakao_id'
    ";

    // 3. execute query and save in database
    $res = mysqli_query($conn, $sql) or die("Registration failed!");

    // 4. check whether the (query is executed) data is inserted or not and display appropriate message
    if ($res == TRUE) {
        // data is inserted successfully
        echo '<script>alert("New member registration is successful!")</script>';
        echo '<script>window.location="login.php"</script>';
    } else {
        // failed to insert data
        echo '<script>alert("Registration failed, please try again!")</script>';
        echo '<script>window.location="register.php"</script>';
    }
}
